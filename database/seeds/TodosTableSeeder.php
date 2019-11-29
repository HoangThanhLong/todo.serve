<?php

use App\Todo;
use Illuminate\Database\Seeder;

class TodosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $todo = new Todo();
        $todo->id = 1;
        $todo->name = 'CV1';
        $todo->content = 'Noi dung 1';
        $todo->save();

        $todo = new Todo();
        $todo->id = 2;
        $todo->name = 'CV2';
        $todo->content = 'Noi dung 2';
        $todo->save();
    }
}
