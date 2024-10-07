<?php

namespace App\Repositories;

use App\Models\Job;

interface JobRepositoryInterface
{
    public function getAllJobs();
    public function getJobById($id);
    public function createJob(array $data);
    public function updateJob(Job $job, array $data);
    public function deleteJob(Job $job);
}
