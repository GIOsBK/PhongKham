<?php

use Illuminate\Database\Seeder;

class SpecialistTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $data = [
        	[
        		'spec_name'=>'Răng Hàm Mặt',
        		'spec_slug'=>str_slug('Răng Hàm Mặt'),
                'spec_detail'=>'Khoa Răng - Hàm - Mặt có thể được phân loại thành các chuyên khoa chính, nhằm phục vụ các nhóm nhu cầu khám chữa của người bệnh như: Nha khoa Phục hình, Chấn thương chỉnh hình hàm mặt, Nha khoa tổng quát, Nha khoa Thẩm mỹ và Nội.'
        	],
        	[
        		'spec_name'=>'Tai Mũi Họng',
        		'spec_slug'=>str_slug('Tai Mũi Họng'),
                'spec_detail'=>'Khoa Răng - Hàm - Mặt có thể được phân loại thành các chuyên khoa chính, nhằm phục vụ các nhóm nhu cầu khám chữa của người bệnh như: Nha khoa Phục hình, Chấn thương chỉnh hình hàm mặt, Nha khoa tổng quát, Nha khoa Thẩm mỹ và Nội.'
        	],
        	[
        		'spec_name'=>'Tiết Niệu',
        		'spec_slug'=>str_slug('Tiết Niệu'),
                'spec_detail'=>'Khoa Răng - Hàm - Mặt có thể được phân loại thành các chuyên khoa chính, nhằm phục vụ các nhóm nhu cầu khám chữa của người bệnh như: Nha khoa Phục hình, Chấn thương chỉnh hình hàm mặt, Nha khoa tổng quát, Nha khoa Thẩm mỹ và Nội.'
        	],
        	[
        		'spec_name'=>'Tim Mạch',
        		'spec_slug'=>str_slug('Tim Mạch'),
                'spec_detail'=>'Khoa tim mạch là một phân ngành quan trọng thuộc khối y học lâm sàng, với mọi hoạt động chẩn đoán và điều trị chuyên môn về các bệnh lý liên quan đến hệ thống tuần hoàn, là một cơ quan có tính quyết định và ảnh hưởng lớn đến sự sống của con người.'
        	],

        ];
        DB::table('tb_specialist')->insert($data);
    }
}
