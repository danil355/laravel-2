<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SqlController extends Controller
{
    public function person_stage(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        $connection = mysqli_connect("localhost", "root", "", "LAB-6");
        $query = "SELECT FIO FROM Person WHERE Stage >= 5 AND Stage <= 15";
        $result = mysqli_query($connection, $query);
        $table0 = null;
        foreach ($result as $i) {
            $table0 .=
                "<tr>
                            <td>" . $i['Stage'] . "</td>
                            </tr>";
        }

        return view('sql', $table0);
    }
        public function person_fio(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
        {
            $connection = mysqli_connect("localhost", "root", "", "LAB-6");
            $query = "SELECT FIO, Stage FROM Person WHERE Staff = 1";
            $result = mysqli_query($connection, $query);
            $table1 = null;
            foreach ($result as $i) {
                $table1 .=
                    "<tr>
                            <td>" . $i['FIO'] . "</td>
                            <td>" . $i['Stage'] . "</td>
                            </tr>";
            }
            return view('sql', $table1);
        }

        public function person_count(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
        {
            $connection = mysqli_connect("localhost", "root", "", "LAB-6");
            $query = "SELECT COUNT(FIO) AS count_person FROM Person";
            $result = mysqli_query($connection, $query);
            $table2 = null;
            foreach ($result as $i) {
                $table2 .=
                    "<tr>
                            <td>" . $i['count_person'] . "</td>
                            </tr>";
            }
            return view('sql', $table2);
        }

//    public function person_staff()
//    {
//        $connection = mysqli_connect("http://127.0.0.1:8000/", "root", "", "LAB-6");
//        $query = "SELECT * FROM Staff WHERE id = Person.Staff";
//        $result = mysqli_query($connection, $query);
//        $table = null;
//        foreach ($result as $i) {
//            $table .=
//                "<tr>
//                            <td>" . $i['count_person'] . "</td>
//                            </tr>";
//        }
//    }
}
