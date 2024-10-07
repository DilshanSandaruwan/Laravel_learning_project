<?php
namespace App\Repositories;

use App\Models\Job;

class JobRepository implements JobRepositoryInterface
{
    public function getAllJobs()
    {
        return Job::with('employer')->latest()->simplePaginate(3);
    }

    public function getJobById($id)
    {
        return Job::findOrFail($id);
    }

    public function createJob(array $data)
    {
        return Job::create($data);
    }

    public function updateJob(Job $job, array $data)
    {
        return $job->update($data);
    }

    public function deleteJob(Job $job)
    {
        return $job->delete();
    }
}
