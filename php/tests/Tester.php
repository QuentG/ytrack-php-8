<?php

declare(strict_types=1);

class Tester implements TesterInterface
{
    private const STUDENT_SOLUTION_BASE_PATH = "/jail/student/";

    private ?string $exerciseName = null;

    public function retrieveExerciseName(): void
    {
        $exerciseName = getopt('t:', ['required:'])['t'] ?? null;

        if (null === $exerciseName) {
            $this->fatal("Missing exercise, usage:\nphp test.php -texercise-name");
        }

        $exerciseName = $this->parseString($exerciseName);

        if ('test' === $exerciseName) {
            $this->fatal("Can't execute test for this filename.");
        }

        if (!file_exists(self::STUDENT_SOLUTION_BASE_PATH . $exerciseName . '.php')) {
            $this->fatal("Unable to find student solution.");
        }

        $this->exerciseName = $exerciseName;
    }

    public function run(): void
    {
        $this->retrieveExerciseName();

        require_once self::STUDENT_SOLUTION_BASE_PATH . $this->exerciseName  . '.php'; // Student Solution
        require_once "../app/" . $this->exerciseName  . '_test.php'; // Solution

        $eq = fn ($a, $b): bool => $a === $b;

        foreach ($tests as $i => $t) {
            try {
                if (!$t($eq)) {
                    throw new Error('Test failed', 1);
                }
            } catch (Error $e) {
                $this->fatal("Test #" . $i . " failed:\n\nError: " . $e->getMessage());
            }
        }

        echo "Exercise " . $this->exerciseName . ' passed (' . count($tests) . ' tests)';
    }

    private function fatal(string $message): void
    {
        echo $message;
        exit(1);
    }

    private function parseString(string $name): string
    {
        return strtolower(trim($name));
    }
}