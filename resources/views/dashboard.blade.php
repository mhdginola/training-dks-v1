@extends('layout.sidebarUser')

@section('title', 'Dashboard')

@section('content')
<div class="container">
  <div class="d-flex flex-column">
    <div class="mt-3 d-grid">
      <div class="btn btn-primary d-flex flex-row justify-content-between p-0 border-0" type="button" data-bs-toggle="collapse" data-bs-target="#day1" aria-expanded="false" aria-controls="day1">
        <h6 class="my-auto ps-3">Day 1
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-down-fill" viewBox="0 0 16 16">
            <path d="M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z"/>
          </svg>
        </h6>
        @isset($qDay1)
          @if ($qDay1->nilai >= 80)
            <h6 class="btn btn-success m-0 px-4">{{ $qDay1->nilai }}</h6>
          @else
            <h6 class="btn btn-danger m-0 px-4">{{ $qDay1->nilai }}</h6>
          @endif
        @endisset

        @empty($qDay1)
          <h6 class="btn btn-warning m-0 px-4">+</h6>
        @endempty
      </div>
      <ul class="list-group list-group-flush collapse px-3" id="day1">
        <li class="list-group-item">Video company profile</li>
        <li class="list-group-item">Video Kata sambutan</li>
        <li class="list-group-item">Slide Nilai-nilai Dekkson</li>
        <li class="list-group-item">Slide perusahaan Group dan Brand-brand holding dan group dan penjelasan singkat bidang kerjanya</li>
        <li class="list-group-item">Slide Website dan Sosial media group</li>
        <li class="list-group-item">Review</li>
        <li class="list-group-item">Istirahat</li>
        <li class="list-group-item">Slide Brosur</li>
        <li class="list-group-item">Tes Kepribadian</li>
        <li class="list-group-item">Quiz</li>
      </ul>
    </div>

    <div class="mt-3 d-grid">
      <div class="btn btn-primary d-flex flex-row justify-content-between p-0 border-0" type="button" data-bs-toggle="collapse" data-bs-target="#day2" aria-expanded="false" aria-controls="day2">
        <h6 class="my-auto ps-3">Day 2
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-down-fill" viewBox="0 0 16 16">
            <path d="M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z"/>
          </svg>
        </h6>
        @isset($qDay2)
          @if ($qDay2->nilai >= 80)
            <h6 class="btn btn-success m-0 px-4">{{ $qDay2->nilai }}</h6>
          @else
            <h6 class="btn btn-danger m-0 px-4">{{ $qDay2->nilai }}</h6>
          @endif
        @endisset

        @empty($qDay2)
          <h6 class="btn btn-warning m-0 px-4">+</h6>
        @endempty
      </div>
      <ul class="list-group list-group-flush collapse px-3" id="day2">
        <li class="list-group-item">Video company profile</li>
        <li class="list-group-item">Video pengarahan hari ke-2 : penjelasan mengenai cara bersikap yang benar terhadap tantangan</li>
        <li class="list-group-item">Slide produk Dekkson sesi 1 : engsel, mortise, silinder, handle, pull handle, door closer</li>
        <li class="list-group-item">Slide produk Dekkson sesi 2 : floor hinge, patch fitting, shower hinge, aksesoris kaca</li>
        <li class="list-group-item">Review</li>
        <li class="list-group-item">Istirahat</li>
        <li class="list-group-item">Slide produk Dekkson sesi 3 : frctiong stay, casemen handle, aksesoris aluminium, furniture</li>
        <li class="list-group-item">Slide produk Dekkson sesi 4 : aksesoris pintu besi</li>
        <li class="list-group-item">Quiz</li>
      </ul>
    </div>

    <div class="mt-3 d-grid">
      <div class="btn btn-primary d-flex flex-row justify-content-between p-0 border-0" type="button" data-bs-toggle="collapse" data-bs-target="#day3" aria-expanded="false" aria-controls="day3">
        <h6 class="my-auto ps-3">Day 3
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-down-fill" viewBox="0 0 16 16">
            <path d="M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z"/>
          </svg>
        </h6>
        @isset($qDay3)
          @if ($qDay3->nilai >= 80)
            <h6 class="btn btn-success m-0 px-4">{{ $qDay3->nilai }}</h6>
          @else
            <h6 class="btn btn-danger m-0 px-4">{{ $qDay3->nilai }}</h6>
          @endif
        @endisset

        @empty($qDay3)
          <h6 class="btn btn-warning m-0 px-4">+</h6>
        @endempty
      </div>
      <ul class="list-group list-group-flush collapse px-3" id="day3">
        <li class="list-group-item">Video company profile</li>
        <li class="list-group-item">Video pengarahan hari ke-3 : penjelasan cara berpakaian, cara berdandan, dan aturan-aturan</li>
        <li class="list-group-item">Melihat chanel youtube Dekkson : cara-cara pemasangan produk</li>
        <li class="list-group-item">Slide produk Dekkson sesi 5 : digital lock, card lock hotel, dan electronik lock</li>
        <li class="list-group-item">Slide produk Dekkson sesi 6 : automatic door, automatic gate</li>
        <li class="list-group-item">Review</li>
        <li class="list-group-item">Istirahat</li>
        <li class="list-group-item">Slide produk Dekkson sesi 7 : deon</li>
        <li class="list-group-item">Slide produk Dekkson sesi 8 : ACP</li>
        <li class="list-group-item">Quiz</li>
      </ul>
    </div>

    <div class="mt-3 d-grid">
      <div class="btn btn-primary d-flex flex-row justify-content-between p-0 border-0" type="button" data-bs-toggle="collapse" data-bs-target="#day4" aria-expanded="false" aria-controls="day4">
        <h6 class="my-auto ps-3">Day 4
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-down-fill" viewBox="0 0 16 16">
            <path d="M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z"/>
          </svg>
        </h6>
        @isset($qDay4)
          @if ($qDay4->nilai >= 80)
            <h6 class="btn btn-success m-0 px-4">{{ $qDay4->nilai }}</h6>
          @else
            <h6 class="btn btn-danger m-0 px-4">{{ $qDay4->nilai }}</h6>
          @endif
        @endisset

        @empty($qDay4)
          <h6 class="btn btn-warning m-0 px-4">+</h6>
        @endempty
      </div>
      <ul class="list-group list-group-flush collapse px-3" id="day4">
        <li class="list-group-item">Video company profile</li>
        <li class="list-group-item">Video pengarahan hari ke-4 : penjelasan mengenai SLS dan produk-produknya</li>
        <li class="list-group-item">Slide produk SLS sesi 1 : system-system pintu manual</li>
        <li class="list-group-item">Slide produk SLS sesi 2 : system-system pintu otomatis</li>
        <li class="list-group-item">Review</li>
        <li class="list-group-item">Istirahat</li>
        <li class="list-group-item">Slide produk SLS sesi 3 : system-system ruang operasi</li>
        <li class="list-group-item">Slide produk SLS sesi 4 : system-system pintu otomatis ruang operasi</li>
        <li class="list-group-item">Quiz</li>
      </ul>
    </div>

    <div class="mt-3 d-grid">
      <div class="btn btn-primary d-flex flex-row justify-content-between p-0 border-0" type="button" data-bs-toggle="collapse" data-bs-target="#day5" aria-expanded="false" aria-controls="day5">
        <h6 class="my-auto ps-3">Day 5
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-down-fill" viewBox="0 0 16 16">
            <path d="M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z"/>
          </svg>
        </h6>
        @isset($qDay5)
          @if ($qDay5->nilai >= 80)
            <h6 class="btn btn-success m-0 px-4">{{ $qDay5->nilai }}</h6>
          @else
            <h6 class="btn btn-danger m-0 px-4">{{ $qDay5->nilai }}</h6>
          @endif
        @endisset

        @empty($qDay5)
          <h6 class="btn btn-warning m-0 px-4">+</h6>
        @endempty
      </div>
      <ul class="list-group list-group-flush collapse px-3" id="day5">
        <li class="list-group-item">Video acara marketing : WEST, DEKKSON KNOWLEDGE, PAMERAN</li>
        <li class="list-group-item">Slide WEST tingkat pertama</li>
        <li class="list-group-item">Review</li>
        <li class="list-group-item">Istirahat</li>
        <li class="list-group-item">Quiz</li>
        <li class="list-group-item">Review pelajaran hari ke-1 sampai dengan hari ke-5</li>
        <li class="list-group-item">Ujian tahap 1</li>
      </ul>
    </div>

    <div class="mt-3 d-grid">
      <div class="btn btn-primary d-flex flex-row justify-content-between p-0 border-0" type="button" data-bs-toggle="collapse" data-bs-target="#day6" aria-expanded="false" aria-controls="day6">
        <h6 class="my-auto ps-3">Day 6
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-down-fill" viewBox="0 0 16 16">
            <path d="M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z"/>
          </svg>
        </h6>
        @isset($qDay6)
          @if ($qDay6->nilai >= 80)
            <h6 class="btn btn-success m-0 px-4">{{ $qDay6->nilai }}</h6>
          @else
            <h6 class="btn btn-danger m-0 px-4">{{ $qDay6->nilai }}</h6>
          @endif
        @endisset

        @empty($qDay6)
          <h6 class="btn btn-warning m-0 px-4">+</h6>
        @endempty
      </div>
      <ul class="list-group list-group-flush collapse px-3" id="day6">
        <li class="list-group-item">Cabang-cabang DKS</li>
        <li class="list-group-item">Pintu dan jendela berdasarkan jenis-jenis dan fungsinya, serta spesifikasinya</li>
        <li class="list-group-item">Perhitungan-perhitungan</li>
        <li class="list-group-item">Review</li>
        <li class="list-group-item">Istirahat</li>
        <li class="list-group-item">Spesifikasi hardware berdasarkan material</li>
        <li class="list-group-item">System-system pintu khusus</li>
        <li class="list-group-item">Quiz</li>
      </ul>
    </div>

    <div class="mt-3 d-grid">
      <div class="btn btn-primary d-flex flex-row justify-content-between p-0 border-0" type="button" data-bs-toggle="collapse" data-bs-target="#day7" aria-expanded="false" aria-controls="day7">
        <h6 class="my-auto ps-3">Day 7
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-down-fill" viewBox="0 0 16 16">
            <path d="M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z"/>
          </svg>
        </h6>
        @isset($qDay7)
          @if ($qDay7->nilai >= 80)
            <h6 class="btn btn-success m-0 px-4">{{ $qDay7->nilai }}</h6>
          @else
            <h6 class="btn btn-danger m-0 px-4">{{ $qDay7->nilai }}</h6>
          @endif
        @endisset

        @empty($qDay7)
          <h6 class="btn btn-warning m-0 px-4">+</h6>
        @endempty
      </div>
      <ul class="list-group list-group-flush collapse px-3" id="day7">
        <li class="list-group-item">Spesifikasi hardware untuk sebuah rumah sederhana</li>
        <li class="list-group-item">Spesifikasi hardware untuk sebuah rumah mewah</li>
        <li class="list-group-item">Spesifikasi hardware untuk kos-kosan</li>
        <li class="list-group-item">Spesifikasi hardware untuk office sederhana</li>
        <li class="list-group-item">Spesifikasi hardware untuk retail/kios/restaurant</li>
        <li class="list-group-item">Review</li>
        <li class="list-group-item">Istirahat</li>
        <li class="list-group-item">Spesifikasi hardware untuk sebuah hotel</li>
        <li class="list-group-item">Spesifikasi hardware untuk sebuah apartement</li>
        <li class="list-group-item">Spesifikasi hardware untuk sebuah office bangunan tinggi</li>
        <li class="list-group-item">Spesifikasi hardware untuk gedung olahraga</li>
        <li class="list-group-item">Quiz</li>
      </ul>
    </div>

    <div class="mt-3 d-grid">
      <div class="btn btn-primary d-flex flex-row justify-content-between p-0 border-0" type="button" data-bs-toggle="collapse" data-bs-target="#day8" aria-expanded="false" aria-controls="day8">
        <h6 class="my-auto ps-3">Day 8
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-down-fill" viewBox="0 0 16 16">
            <path d="M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z"/>
          </svg>
        </h6>
        @isset($qDay8)
          @if ($qDay8->nilai >= 80)
            <h6 class="btn btn-success m-0 px-4">{{ $qDay8->nilai }}</h6>
          @else
            <h6 class="btn btn-danger m-0 px-4">{{ $qDay8->nilai }}</h6>
          @endif
        @endisset

        @empty($qDay8)
          <h6 class="btn btn-warning m-0 px-4">+</h6>
        @endempty
      </div>
      <ul class="list-group list-group-flush collapse px-3" id="day8">
        <li class="list-group-item">Video electronik lock Dekkson dan smart home DEON</li>
        <li class="list-group-item">Spesifikasi untuk smart home</li>
        <li class="list-group-item">Spesifikasi untuk system-system pintu manual</li>
        <li class="list-group-item">Review</li>
        <li class="list-group-item">Istirahat</li>
        <li class="list-group-item">Video-video system MOT dan pintu-pintu ruang operasi</li>
        <li class="list-group-item">Spesifikasi untuk system-system pintu rumah sakit</li>
        <li class="list-group-item">Quiz</li>
      </ul>
    </div>

    <div class="mt-3 d-grid">
      <div class="btn btn-primary d-flex flex-row justify-content-between p-0 border-0" type="button" data-bs-toggle="collapse" data-bs-target="#day9" aria-expanded="false" aria-controls="day9">
        <h6 class="my-auto ps-3">Day 9
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-down-fill" viewBox="0 0 16 16">
            <path d="M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z"/>
          </svg>
        </h6>
        @isset($qDay9)
          @if ($qDay9->nilai >= 80)
            <h6 class="btn btn-success m-0 px-4">{{ $qDay9->nilai }}</h6>
          @else
            <h6 class="btn btn-danger m-0 px-4">{{ $qDay9->nilai }}</h6>
          @endif
        @endisset

        @empty($qDay9)
          <h6 class="btn btn-warning m-0 px-4">+</h6>
        @endempty
      </div>
      <ul class="list-group list-group-flush collapse px-3" id="day9">
        <li class="list-group-item">Video-video system-system pintu otomatis</li>
        <li class="list-group-item">Spesifikasi untuk system-system pintu bandara</li>
        <li class="list-group-item">Spesifikasi untuk kebutuhan puntu mall</li>
        <li class="list-group-item">Review</li>
        <li class="list-group-item">Istirahat</li>
        <li class="list-group-item">Spesifikasi untuk pintu-pintu kayu, pintu aluminium, pintu upvc</li>
        <li class="list-group-item">Spesifikasi untuk pintu-pintu kaca dan besi</li>
        <li class="list-group-item">Quiz</li>
      </ul>
    </div>

    <div class="mt-3 d-grid">
      <div class="btn btn-primary d-flex flex-row justify-content-between p-0 border-0" type="button" data-bs-toggle="collapse" data-bs-target="#day10" aria-expanded="false" aria-controls="day10">
        <h6 class="my-auto ps-3">Day 10
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-down-fill" viewBox="0 0 16 16">
            <path d="M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z"/>
          </svg>
        </h6>
        @isset($qDay10)
          @if ($qDay10->nilai >= 80)
            <h6 class="btn btn-success m-0 px-4">{{ $qDay10->nilai }}</h6>
          @else
            <h6 class="btn btn-danger m-0 px-4">{{ $qDay10->nilai }}</h6>
          @endif
        @endisset

        @empty($qDay10)
          <h6 class="btn btn-warning m-0 px-4">+</h6>
        @endempty
      </div>
      <ul class="list-group list-group-flush collapse px-3" id="day10">
        <li class="list-group-item">Video-video presentasi WEST</li>
        <li class="list-group-item">Teknik presentasi produk</li>
        <li class="list-group-item">Menyusun materi presentasi</li>
        <li class="list-group-item">Istirahat</li>
        <li class="list-group-item">Membuat materi presentasi</li>
        <li class="list-group-item">Presentasi produk</li>
        <li class="list-group-item">Tanya Jawab</li>
      </ul>
    </div>

    <div class="mt-3 d-grid">
      <div class="btn btn-primary d-flex flex-row justify-content-between p-0 border-0" type="button" data-bs-toggle="collapse" data-bs-target="#day11" aria-expanded="false" aria-controls="day11">
        <h6 class="my-auto ps-3">Day 11
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-down-fill" viewBox="0 0 16 16">
            <path d="M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z"/>
          </svg>
        </h6>
        @isset($qDay11)
          @if ($qDay11->nilai >= 80)
            <h6 class="btn btn-success m-0 px-4">{{ $qDay11->nilai }}</h6>
          @else
            <h6 class="btn btn-danger m-0 px-4">{{ $qDay11->nilai }}</h6>
          @endif
        @endisset

        @empty($qDay11)
          <h6 class="btn btn-warning m-0 px-4">+</h6>
        @endempty
      </div>
      <ul class="list-group list-group-flush collapse px-3" id="day11">
        <li class="list-group-item">Video-video DKH</li>
        <li class="list-group-item">Service Excellent</li>
        <li class="list-group-item">Video service excellent</li>
        <li class="list-group-item">Menjelaskan produk dekkson</li>
        <li class="list-group-item">Video cara menjelaskan produk</li>
        <li class="list-group-item">Review</li>
        <li class="list-group-item">Istirahat</li>
        <li class="list-group-item">Video packaging produk dekkson dan kelengkapannya - sesi 1</li>
        <li class="list-group-item">Materi promosi dekkson</li>
        <li class="list-group-item">Tugas - membuat video bagaimana menjelaskan produk dekkson dengan baik kepada konsumen, dengan memberikan service yang terbaik</li>
      </ul>
    </div>

    <div class="mt-3 d-grid">
      <div class="btn btn-primary d-flex flex-row justify-content-between p-0 border-0" type="button" data-bs-toggle="collapse" data-bs-target="#day12" aria-expanded="false" aria-controls="day12">
        <h6 class="my-auto ps-3">Day 12
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-down-fill" viewBox="0 0 16 16">
            <path d="M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z"/>
          </svg>
        </h6>
        @isset($qDay12)
          @if ($qDay12->nilai >= 80)
            <h6 class="btn btn-success m-0 px-4">{{ $qDay12->nilai }}</h6>
          @else
            <h6 class="btn btn-danger m-0 px-4">{{ $qDay12->nilai }}</h6>
          @endif
        @endisset

        @empty($qDay12)
          <h6 class="btn btn-warning m-0 px-4">+</h6>
        @endempty
      </div>
      <ul class="list-group list-group-flush collapse px-3" id="day12">
        <li class="list-group-item">Video packaging produk dekkson dan kelengkapannya - sesi 2</li>
        <li class="list-group-item">Menjelaskan produk dengan brosur dekkson</li>
        <li class="list-group-item">Istirahat</li>
        <li class="list-group-item">Menjelaskan produk dengan brosur SLS, ACP, Kuppe, DEON</li>
        <li class="list-group-item">Video packaging produk dekkson dan kelengkapannya - sesi 3</li>
        <li class="list-group-item">Tugas - membuat video penjelasan produk dengan menggunakan brosur</li>
      </ul>
    </div>

    <div class="mt-3 d-grid">
      <div class="btn btn-primary d-flex flex-row justify-content-between p-0 border-0" type="button" data-bs-toggle="collapse" data-bs-target="#day13" aria-expanded="false" aria-controls="day13">
        <h6 class="my-auto ps-3">Day 13
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-down-fill" viewBox="0 0 16 16">
            <path d="M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z"/>
          </svg>
        </h6>
        @isset($qDay13)
          @if ($qDay13->nilai >= 80)
            <h6 class="btn btn-success m-0 px-4">{{ $qDay13->nilai }}</h6>
          @else
            <h6 class="btn btn-danger m-0 px-4">{{ $qDay13->nilai }}</h6>
          @endif
        @endisset

        @empty($qDay13)
          <h6 class="btn btn-warning m-0 px-4">+</h6>
        @endempty
      </div>
      <ul class="list-group list-group-flush collapse px-3" id="day13">
        <li class="list-group-item">Mengumpulkan video penjelasan produk dan di review</li>
        <li class="list-group-item">Menjelaskan produk ke team marketing dan produk dengan memakai brosur</li>
        <li class="list-group-item">Membuat spesifikasi produk hardware sesuai dengan soal yang diberikan</li>
        <li class="list-group-item">Review soal sebelumnya</li>
        <li class="list-group-item">Istirahat</li>
        <li class="list-group-item">Review Materi hari ke-1 s/d hari ke-5</li>
        <li class="list-group-item">Membuat materi presentasi PPT untuk 100 halaman</li>
        <li class="list-group-item">Dilanjutkan di rumah untuk pembuatan materi presentasi soal sebelumnya</li>
      </ul>
    </div>

    <div class="mt-3 d-grid">
      <div class="btn btn-primary d-flex flex-row justify-content-between p-0 border-0" type="button" data-bs-toggle="collapse" data-bs-target="#day14" aria-expanded="false" aria-controls="day14">
        <h6 class="my-auto ps-3">Day 14
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-down-fill" viewBox="0 0 16 16">
            <path d="M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z"/>
          </svg>
        </h6>
        @isset($qDay14)
          @if ($qDay14->nilai >= 80)
            <h6 class="btn btn-success m-0 px-4">{{ $qDay14->nilai }}</h6>
          @else
            <h6 class="btn btn-danger m-0 px-4">{{ $qDay14->nilai }}</h6>
          @endif
        @endisset

        @empty($qDay14)
          <h6 class="btn btn-warning m-0 px-4">+</h6>
        @endempty
      </div>
      <ul class="list-group list-group-flush collapse px-3" id="day14">
        <li class="list-group-item">Penjelasan cara kerja dan area kerja All (Specifier, MA, Sales, Administrasi)</li>
        <li class="list-group-item">Video cara Make up, Berpakaian dengan jadwal seragamnya</li>
        <li class="list-group-item">Membuat video dan foto selfie praktek dari soal sebelumnya</li>
        <li class="list-group-item">Istirahat</li>
        <li class="list-group-item">Presentasi dari materi hari ke 13, soal 8</li>
        <li class="list-group-item">Penjelasan cara membuat laporan-laporan yang diperlukan termasuk laporan di ERP, dan Account ERP</li>
        <li class="list-group-item">Tes lisan dan tertulis dengan Manajemen</li>
      </ul>
    </div>

    <div class="mt-3 d-grid">
      <div class="btn btn-primary d-flex flex-row justify-content-between p-0 border-0" type="button" data-bs-toggle="collapse" data-bs-target="#day15" aria-expanded="false" aria-controls="day15">
        <h6 class="my-auto ps-3">Day 15
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-down-fill" viewBox="0 0 16 16">
            <path d="M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z"/>
          </svg>
        </h6>
        @isset($qDay15)
          @if ($qDay15->nilai >= 80)
            <h6 class="btn btn-success m-0 px-4">{{ $qDay15->nilai }}</h6>
          @else
            <h6 class="btn btn-danger m-0 px-4">{{ $qDay15->nilai }}</h6>
          @endif
        @endisset

        @empty($qDay15)
          <h6 class="btn btn-warning m-0 px-4">+</h6>
        @endempty
      </div>
      <ul class="list-group list-group-flush collapse px-3" id="day15">
        <li class="list-group-item">Penjelasan berkas-berkas yang harus diisi dan target-target yang harus dicapai</li>
        <li class="list-group-item">Tes lisan dan tertulis dengan atasan masing-masing</li>
        <li class="list-group-item">Review Training dari Hari ke-1 sampai dengan Hari ke-15</li>
        <li class="list-group-item">Istirahat</li>
        <li class="list-group-item">Kuis tahap akhir</li>
        <li class="list-group-item">Tanya jawab dengan Manajemen</li>
        <li class="list-group-item">Graduation ceremony</li>
      </ul>
    </div>

  </div>
</div>

<div 
  class=""
  style="
    position: absolute;
    left: 0px;
    bottom: 0px;
    z-index: -1;
    background-image: url({{ asset('images/dashboard.png') }});
    background-size: cover; 
    height: 100%;
    width: 100%;
    background-position: bottom;
    background-repeat: no-repeat;
  "
>
</div>
@endsection