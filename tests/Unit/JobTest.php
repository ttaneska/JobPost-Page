<?php

it('it belongs to an employer', function () {
    //AAA
    //Arrange
    $employer=\App\Models\Employer::factory()->create();
    $job=\App\Models\Job::factory()->create([
        'employer_id'=>$employer->id,
    ]);

    //Act  //Assert
  expect($job->employer->is($employer))->toBeTrue();

});
it('can have tags', function(){
//AAA
    $job=\App\Models\Job::factory()->create();
    $job->tag('Frontend');
    expect($job->tags)->toHaveCount(1);
});
