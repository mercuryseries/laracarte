<?php

namespace Laracarte\Jobs;

use Laracarte\Jobs\Job;
use Illuminate\Contracts\Bus\SelfHandling;
use Illuminate\Support\Facades\Storage;

class SaveImageFile extends Job implements SelfHandling
{
    private $file;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($file)
    {
        $this->file = $file;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $fileName = $this->generateRandomFileName();

        $this->saveImage($fileName);

        return $fileName;
    }

    private function generateRandomFileName(){
        return str_random(20) . '.' . $this->file->getClientOriginalExtension();
    }

    private function saveImage($fileName){
        Storage::put(
            config('upload_paths.avatars') . $fileName,
            file_get_contents($this->file->getRealPath())
        );
    }
}
