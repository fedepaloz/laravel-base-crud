<?php
use App\Models\Comic;
use Illuminate\Database\Seeder;

class ComicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $new_comic = new Comic();
        $new_comic-> title = 'pippo';
        $new_comic-> description = 'pippo va sulla neve';
        $new_comic-> thumb = 'https://www.dccomics.com/sites/default/files/styles/covers192x291/public/comic-covers/2018/09/AC1000_DLX_162-001_HD_5ba13723281ab0.37845353.jpg?itok=ZsI-C5eX';
        $new_comic-> price = 20;
        $new_comic-> series = 'deluxe';
        $new_comic-> sale_date = '2018-10-02';
        $new_comic-> type = 'comic book';

        $new_comic-> save();

        
    }
}
