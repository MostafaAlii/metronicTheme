<?php
namespace Database\Seeders;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\{App,File};
class DatabaseSeeder extends Seeder {
    public function run(): void {
        env('APP_ENV') === 'local' ? $this->localSeeders() : $this->productionSeeder();
    }

    private function localSeeders() {
        $this->seederCalling();
    }

    private function productionSeeder() {
        $this->seederCalling();
    }

    private function seederCalling() {
        $seederFiles = File::allFiles(database_path('seeders'));
        $seederFileArray = [];
        foreach ($seederFiles as $seederFile) {
            if ($seederFile->getBasename() !== 'DatabaseSeeder.php') 
                $seederFileArray[] = $seederFile;
        }
        usort($seederFileArray, function ($time_a, $time_b) {
            return filectime($time_a->getRealPath()) <=> filectime($time_b->getRealPath());
        });
        
        foreach ($seederFileArray as $seederFile) {
            $seederClassNamespace = 'Database\\Seeders\\' . $seederFile->getBasename('.php');
            if (class_exists($seederClassNamespace)) 
                $this->call($seederClassNamespace);
        }
    }

}