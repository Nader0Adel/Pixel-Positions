<?php

use App\Models\Employer;
use App\Models\Job;

test('Belongs to an Employer', function () {
    //AAA (Arrange / Act / Assert)
    $employer = Employer::factory()->create();
    $job = Job::factory()->create([
        'employer_id' => $employer->id
    ]);
    expect($job->employer->is($employer))->toBeTrue();
});

test('can have tags',function(){
    $job = Job::factory()->create();
    $job->tag('frontend');
    expect($job->tags)->toHaveCount(1);
});