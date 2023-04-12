<?php

namespace App\Http\Controllers;

use App\Models\Person;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    //
    public function Index(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        $header = 'Резюме и вакансии';
        return view ('page')->with('header', $header);
    }

    public function Show(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        $header = 'Резюме и вакансии';
        return view('resume',
            [   'surname' => 'Иванов',
                'profession' => 'Программист',
                'mobile' => '55-55-55',
                'experience' => '4 года',
                'avatar' => 'storage/Images/ava1.jpg'
            ])->with('header', $header);
    }

    public function Stages(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        $stages = Person::whereBetween('Stage', [5, 15])->get();
        return view('first', ['stages' => $stages]);
    }
    public function ShowStaffs(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        $programmerPerson = Person::join('Staff', 'Staff.id', '=', 'Person.Staff')->select('FIO', 'Stage')
            ->where('Staff.staff', '=', 'Программист')->get();
        return view('second', ['programmerPerson' => $programmerPerson]);
    }
    public function ListStaffs(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        $listStaffs = Person::join('Staff', 'Person.Staff', '=', 'Staff.id')->select('Staff.staff')->distinct()->get();
        return view('third', ['liststaffs' => $listStaffs]);
    }
    public function CountPerson(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        $countPerson = Person::count();
        return view('fourth')->with('countPerson', $countPerson);
    }
}
