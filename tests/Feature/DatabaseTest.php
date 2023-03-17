<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\DatabaseTransactions;
use App\Exports\QuizExport;
// use Illuminate\Foundation\Testing\DatabaseMigrations;
// use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;
use Tests\TestCase;

class DatabaseTest extends TestCase
{
    // use DatabaseMigrations;
    use DatabaseTransactions;
    // use RefreshDatabase;

    public function testDownload()
    {
      $this->withoutMiddleware()
          ->get('/hasil/export')
          ->assertDownload('hasil.xlsx');
    }

    // public function testDownloadExpectedContent()
    // {
    //     Excel::fake();
    //     $this->withoutMiddleware()
    //       ->get('/hasil/export')
    //       ->assertStatus(200);
      
    //     Excel::assertDownloaded('hasil.xlsx', function(QuizExport $export) {
    //           // Assert that the correct export is downloaded.
    //           $res = $export->collection()->toArray();
    //           $sv = [];
    //           foreach($res as $dt)
    //           {
    //             $ob = (object) $dt;
    //             array_push($sv, $ob->id_user);
    //           }
    //           return $this->assertContains("1", $sv, "asd tidak ada", true) === null;
    //       });
    // }

    // public function testUpdate()
    // {
    //   DB::table('users')
    //     ->where('id', 1)
    //     ->update(['level' => 2]);
      
    //   $this->assertDatabaseHas('users', [
    //     "level" => 2
    //   ]);
    // }

    // public function testGetData()
    // {
    //     Excel::fake();
      
    //     $this->withoutMiddleware()->get('/hasil/export')
    //       ->assertStatus(200);
      
    //     Excel::assertDownloaded('hasil.xlsx', function(QuizExport $export) {
    //           // Assert that the correct export is downloaded.
    //           $res = $export->collection()->toArray();
    //           $sv = [];
    //           foreach($res as $dt)
    //           {
    //             $ob = (object) $dt;
    //             array_push($sv, $ob->id_user);
    //           }
    //           return $this->assertContains("asd", $sv, "asd tidak ada", true) === null;
    //       });
      
    // }
}
