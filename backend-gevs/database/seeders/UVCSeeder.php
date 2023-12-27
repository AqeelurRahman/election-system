<?php

namespace Database\Seeders;

use App\Models\VoterUniqueCode;
use Illuminate\Database\Seeder;

class UVCSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $valideUVC = $this->getCodes();
        foreach ($valideUVC as $value)
        {
            VoterUniqueCode::create([
               'code' => $value
            ]);
        }
    }

    private function getCodes()
    {
        return [
            'HH64FWPE',
            'BBMNS9ZJ',
            'KYMK9PUH',
            'WL3K3YPT',
            'JA9WCMAS',
            'Z93G7PN9',
            'WPC5GEHA',
            'RXLNLTA6',
            '7XUFD78Y',
            'DBP4GQBQ',
            'ZSRBTK9S',
            'B7DMPWCQ',
            'YADA47RL',
            '9GTZQNKB',
            'KSM9NB5L',
            'BQCRWTSG',
            'ML5NSKKG',
            'D5BG6FDH',
            '2LJFM6PM',
            '38NWLPY3',
            '2TEHRTHJ',
            'G994LD9T',
            'Q452KVQE',
            '75NKUXAH',
            'DHKVCU8T',
            'TH9A6HUB',
            '2E5BHT5R',
            '556JTA32',
            'LUFKZAHW',
            'DBAD57ZR',
            'K96JNSXY',
            'PFXB8QXM',
            '8TEXF2HD',
            'N6HBFD2X',
            'K3EVS3NM',
            '5492AC6V',
            'U5LGC65X',
            'BKMKJN5S',
            'JF2QD3UF',
            'NW9ETHS7',
            'VFBH8W6W',
            '7983XU4M',
            '2GYDT5D3',
            'LVTFN8G5',
            'UNP4A5T7',
            'UMT3RLVS',
            'TZZZCJV8',
            'UVE5M7FR',
            'W44QP7XJ',
            '9FCV9RMT'
        ];

    }
}