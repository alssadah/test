<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

use ZipArchive;
use File;
class ZipController extends Controller
{
public function download()
{
    $zip= new ZipArchive;
    $filename='nmfy.zip';

    if($zip->open(public_path($filename),ZipArchive::CREATE)==True)
    {
        $file=File::files(public_path('nmfy'));
        foreach($file as $key=>$value)
        {
            $relativename=basename($value);
            $zip->addFile($value,$relativename);
        }
        $zip->close();
    }
    return response()->download(public_path($filename));
}
}
