<?php

interface TesterInterface
{
    public function retrieveExerciseName(): void;
    
    public function run(): void;
}