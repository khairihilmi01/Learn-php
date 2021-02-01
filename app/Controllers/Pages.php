<?php namespace App\Controllers;

class Pages extends BaseController
{
	public function index()
	{
        $data = [
            'title'=>'Home | Khairi Hilmi Saputra'
        ];
        return view('pages/home',$data);
        
    }
    
    public function about()
    {
        $data = [
            'title'=>'About Me | Khairi Hilmi Saputra'
        ];
        
        return view('pages/about',$data);
    }

    public function contact()
    {
        $data = [
            'title'=>'Contact Us',
            'alamat'=> [
                [
                'tipe'=>'rumah',
                'alamat'=>'Jl. Kuini 1 Komplek PLN',
                'kota'=>'Solok'
            ],
            [
                'tipe'=>'Kantor',
                'alamat'=>'Jl. mangga 1 Komplek Sini',
                'kota'=>'Jawa'
            ]
        ]
    ];
                
        return view('pages/contact',$data);
    }
	//--------------------------------------------------------------------
}
