<?php
namespace ClarkNguyen85\Generator;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class GeneratorController extends Controller
{
    public function index()
    {
    	$basePath = base_path();
    	$assetPath = __DIR__ . '/assets';
    	$jsPath = $assetPath . '/js';
    	$jsContent = file_get_contents($jsPath . '/generator.js');
        $users = [];
    	return view('generator::index', ['jsContent' => $jsContent]);
    }
}