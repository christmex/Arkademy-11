<?php
    function biodata()
    {
        $biodata = [
            "name" => "Jonathan Christian",
            "age" => 18,
            "address" => "Jl. Batua Raya",
            "hobbies" => [
                "Membaca", "Belajar","Ngoding","Olahraga"
            ],
            "is_married" => false,
            "list_school" => [
                "year_in" => 2016,
                "year_out" => 2019,
                "major" => "Rekayasa Perangkat Lunak"
            ],
            "skills" => [
                "skill_name" => "PHP",
                "level" => "advanced"
            ],
            "interest_in_coding" => true,
        ];
        $json_data = json_encode($biodata);
        return $json_data;
    }

echo biodata();
