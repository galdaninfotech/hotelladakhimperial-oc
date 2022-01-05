<?php namespace Galdan\Tour\Updates;

use Carbon\Carbon;
use Galdan\Tour\Models\Post;
use Galdan\Tour\Models\Itinerary;
use Galdan\Tour\Models\Day;
use Galdan\Tour\Models\Category;
use Galdan\Tour\Models\Client;
use October\Rain\Database\Updates\Seeder;
use Faker;

class SeedAllTables extends Seeder
{

    public function run()
    {   
        $faker = Faker\Factory::create();

        Category::create(['name' => trans('galdan.tour::lang.categories.uncategorized'),'slug' => 'uncategorized',]);
        Category::create(['name' => trans('galdan.tour::lang.categories.package'), 'slug' => 'package', ]); 
        Category::create(['name' => trans('galdan.tour::lang.categories.trekking'), 'slug' => 'trekking', ]); 
        Category::create(['name' => trans('galdan.tour::lang.categories.expedition'), 'slug' => 'expedition', ]);
        Category::create(['name' => trans('galdan.tour::lang.categories.biking'), 'slug' => 'biking', ]);

        Itinerary::create([
            'name' => 'Amazing Ladakh',
            'slug' => 'amazing-ladakh',
            'published_at' => Carbon::now(),
            'published' => true
        ]);

        Itinerary::create([
            'name' => 'Manali Leh Manali',
            'slug' => 'manali-leh-manali',
            'published_at' => Carbon::now(),
            'published' => true
        ]);



        // Amazing Ladakh
        Day::create([
            'itinerary_id' => 1, 
            'day' => 1, 
            'intro' => 'Arrival at Srinagar', 
            'description' => 'As you reach Srinagar, our team members will offer you an assisted transfer to the Deluxe Houseboat at Dal Lake/Nagin Lake. Savor a grand lunch at the houseboat. After the lunch, enjoy a Shikara ride on the lake and afterwards proceed towards the famous Mughal Garden. This also includes a visit to Nishat Bagh and Shalimar Gardens.'
        ]);

        Day::create([
            'itinerary_id' => 1, 
            'day' => 2, 
            'intro' => 'Srinagar - Gulmarg', 
            'description' => 'This day, enjoy a full day excursion to the snow capped land of Gulmarg which is around 45 kilometers from Srinagar. To make this tour to Gulmarg all the more adventurous, you can also enjoy Gondola cable car ride, snow skiing etc. The lunch is arranged in a hotel in Gulmarg. Spend the evening in the meadows of Gulmarg and stroll around. Overnight at the hotel.'
        ]);

        Day::create([
            'itinerary_id' => 1, 
            'day' => 3, 
            'intro' => 'Gulmarg - Pahalgam', 
            'description' => 'Post a refreshing breakfast in the morning, drive to the beautiful valley of Pahalgam situated on the banks of the river Lidder. While proceeding towards Pahalgam, en-route visit the Avantipur Ruins and Cricket Bat Factory. By the afternoon, you will reach Pahalgam. Upon reaching there, take some leisure and then explore the scenic beauty of the Lidder river valley. Overnight at the hotel.'
        ]);

        Day::create([
            'itinerary_id' => 1, 
            'day' => 4, 
            'intro' => 'Pahalgam - Srinagar', 
            'description' => 'This morning, enjoy relaxing walks along Lidder River to experience its mild lapping. In the afternoon, embark on a drive to Srinagar. Upon reaching Srinagar check in at hotel to relax and unwind. The evening is free to you; so if you want you can also visit the local markets of the city. Overnight at the hotel.'
        ]);

        Day::create([
            'itinerary_id' => 1, 
            'day' => 5, 
            'intro' => 'Srinagar - Mulbekh', 
            'description' => 'This morning, start for Kargil which is about 205 kilometers from Srinagar. En-route, stop at the valley of meadows Sonmarg for lunch and then crossover the Zojila pass which is located 3900 meter above the sea level. After driving for some time, reach the Drass Village which is said to be the 2nd coldest place on earth after Siberia in Russia. By the evening, you will reach Kargil town; upon reaching there, check in at hotel/deluxe camp for overnight stay.'
        ]);

        Day::create([
            'itinerary_id' => 1, 
            'day' => 6, 
            'intro' => 'Mulbekh - Leh', 
            'description' => 'Post breakfast embark on a drive to Leh which is 230 kilometers from Kargil town. En-route visit the ancient rock cut statue of Maitreya Buddha at Mulbekh village. Later stop for photo at lunar like landscapes near Lamayuru Monastery. On the way, enjoy a mouth tempting lunch and photo stop at the sangam of Indus and Zanskar rivers. By the evening, arrive Leh and check in at the hotel in Leh.'
        ]);

        Day::create([
            'itinerary_id' => 1, 
            'day' => 7, 
            'intro' => 'Leh - Indus Valley Tour', 
            'description' => 'Post breakfast proceed for a full day tour of Indus Valley Monasteries. This day you will be visiting Royal Museum at Stok Palace, Thiksey, Stanga and Changchubling Hemis Monasteries. A picnic lunch is also arranged for the day. Overnight at the hotel in Leh.'
        ]);

        Day::create([
            'itinerary_id' => 1, 
            'day' => 8, 
            'intro' => 'Leh', 
            'description' => 'Post breakfast visit the Khardungla Pass which is 18360 ft above the sea level and is world’s highest motorable road. At the pass you will find several souvenir shops; so if you want you can do some shopping too. Return to Leh by afternoon and enjoy a deluxe lunch at the hotel. Post lunch, visit Shanti Stupa; after that you are free to do shopping or to spend the evening as you wish to. Overnight at the hotel.'
        ]);

        Day::create([
            'itinerary_id' => 1, 
            'day' => 9, 
            'intro' => 'Leh', 
            'description' => 'In the morning start for Pangong Lake for a full day excursion. It is around 135 kilometers away and is one of the biggest natural brackish lakes in the Himalayas. To make the day exciting, a picnic lunch in Pangong is also arranged. By evening return to Leh for an overnight stay at hotel.'
        ]);

        Day::create([
            'itinerary_id' => 1, 
            'day' => 10, 
            'intro' => 'Leh - (Departure)', 
            'description' => 'Today, you will be transferred to the airport for your onward journey.'
        ]);





        // Manali Leh Manali
        Day::create([
            'itinerary_id' => 2, 
            'day' => 1, 
            'intro' => 'Arrive Manali', 
            'description' => 'Arrive Manali and check in at your pre booked hotel. Interact with the rest of team members and check the gears. Spend the beautiful evening and overnight at your hotel in Manali'
            ]);
        Day::create([
            'itinerary_id' => 2, 
            'day' => 2, 
            'intro' => 'Manali to Jispa, Drive 145 kms (6 to 8 hours)',
            'description' => 'The journey starts from Manali, and follow the route to Rohtang pass. (13,047 ft/3,978 m), the first of the high passes, then down into the Lahoul valley. The landscape changes dramatically, the greenery being replaced by barren hillsides, Following the Chandra river the journey takes one to its confluence with the Bhaga, which joins to form the Chenab, one of the biggest tributaries of the Indus. Following the Bhaga upstream, the road goes past Keylong, the district headquarters, and on to Jispa. Check in at your hotel / Camp at Jispa and overnight stay.'
            ]);
        Day::create([
            'itinerary_id' => 2, 
            'day' => 3, 
            'intro' => 'Jispa to Sarchu, Drive 85 kms. (6 to 7 hours)', 
            'description' => 'From Jispa a level stretch leads to the checkpost at Darcha from where the road begins a steady and at times steep ascent up the Bhaga river. The road crosses large meadows such as Zingzingbar and on to the Baralacha la (16,020 ft/ 4,883 m). The ascent is so gradual that one hardly realises it. Arrive at Sarchu and spend overnight at Deluxe Camp.'
            ]);
        Day::create([
            'itinerary_id' => 2, 
            'day' => 4, 
            'intro' => 'Sarchu to Pang, Drive 72 kms. (5 to 7 hours)', 
            'description' => 'After breakfast cross the Tsarap Chu river and start climbing up the Lachlung la (16,615 ft/5,065 m), across the Zanskar range. The descent from the pass leads to the Kyangshu plains, a level stretch of over 40 kms. which is named after the kyang, Around Post afternoon the campsite at Pang is approached. You may have your own camping else spend the pre booked temporary camp at Pang. Overnight at Pang.
'
            ]);

            Day::create([
            'itinerary_id' => 2, 
            'day' => 5, 
            'intro' => 'Pang to Leh, Drive 185 kms. (7 to 9 hours)', 
            'description' => 'From camp the road goes via Debring, a big Indian army post, and climbs up to the Tanglang la (17,4From camp the road goes via Debring, a big Indian army post, and climbs up to the Tanglang la (17,475 ft/5,328 m), the highest point on the journey. Descend from Tanglangla you will arrive at Upsi just you cross the bridge over river Indus. Enter in Leh valley drive west to reach at leh town. A flat drive with beautiful views of monasteries and prayer flags invite you at the roof top of the world. Check in at your Hotel and overnight stay.
'
            ]);

            Day::create([
            'itinerary_id' => 2, 
            'day' => 6, 
            'intro' => 'In Leh', 
            'description' => 'You may have a relaxed day in Leh and check all the gears and essential repairs. A short drive around town / Shanti Stupa worth spending and registering your presence in the city. Dinner and overnight stay at the hotel in Leh.
'
            ]);

            Day::create([
            'itinerary_id' => 2, 
            'day' => 7, 
            'intro' => 'Nubra to Over Khardongla Pass, DRIVE 150 Kms Approx', 
            'description' => 'Get prepared to ride at the roof top of the world by driving in the north of Leh to reach Nubra Valley. enjoy the Himalayan Panorama at the top of Khardungla pass and descend from here by crossing beautiful green patched villages while approaching to Nubra Valley. River Tsyok will be visible on your right direction. From the check point you have two option either to follow the left bank of river to reach at Diskit or cross the river Tshyok to approach Sumur. Spend the beautiful evening in Nubra valley.
'
            ]);

            Day::create([
            'itinerary_id' => 2, 
            'day' => 8, 
            'intro' => 'Drive back to Leh', 
            'description' => 'After breakfast take a ride to opposite valley and back to Leh by following the same route over Khardungla Pass and overnight at hotel in Leh.'
            ]);

            Day::create([
            'itinerary_id' => 2, 
            'day' => 9, 
            'intro' => 'Drive tp Pangong Lake, 150 kms', 
            'description' => 'After breakfast start drive to east and you may stop for a while to explore Shey Palace and most picturesque monastery called Thikse just few minutes ride away from Leh town. After Upsi you may need to check your permits and ascend drive to reach at Changla pass. Third highest pass. From Changl a pas your most of the drive will be down hill till you arrive a small town / village called Tangje. You have possibility to have your lunch at this place and follow the drive till you see the glimpse of Pangong Lake from a distance. Arrive at the most beautiful lake called Pangong Tso and check in at your Camp for an overnight stay.'
            ]);

            Day::create([
            'itinerary_id' => 2, 
            'day' => 10, 
            'intro' => 'Drive back to Leh', 
            'description' => 'After a leisurely breakfast retrace back to Leh. Spend the beautiful evening in town. Overnight at hotel in levenshtein(str1, str2).'
            ]);

            Day::create([
            'itinerary_id' => 2, 
            'day' => 11, 
            'intro' => 'In Leh and to Sham Valley, 250 kms', 
            'description' => 'After breakfast drive in the west of Leh town to explore the another beautiful part of this region called Sham Valley. Arrive Nimo to see the confluence of Zanskar and Indus river and further drive by following Leh – Srinagar highway will take you to Moon Land – Lamayuru. Have Lunch at this place and drive back to Leh. Enroute you may stop at Alchi to see an ancient monastery and only one monastery constructed on a flat ground. Dinner and overnight at Hotel in Leh.'
            ]);

            Day::create([
            'itinerary_id' => 2, 
            'day' => 12, 
            'intro' => 'Drive back to Leh', 
            'description' => 'After breakfast you may check out and depart for onward journey.'
            ]);

    

        






        // Tours
        
        Post::create([
            'title' => 'Amazing Ladakh 01',
            'slug' => 'amazing-ladakh-01',
            'user_id' => '1',
            'category_id' => '2',
            'itinerary_id' => '1',
            'intro' => 'The Markha Trek Ladakh is certainly one of the most diverse trek in the Western Himalayas and the barren landscape of Ladakh and its unique Buddhist culture makes it even more special.',
            'description' => 'The Markha Trek Ladakh is certainly one of the most diverse trek in the Western Himalayas and the barren landscape of Ladakh and its unique Buddhist culture makes it even more special. The Markha Trek Ladakh is certainly one of the most diverse trek in the Western Himalayas and the barren landscape of Ladakh and its unique Buddhist culture makes it even more special.',
            'grade' => 1,
            'start' => '2017-05-08',
            'end' => '',
            'includes' => '<ul>
                                <li>Accommodation Home-stay / Camp </li>
                                <li>Meals while on tour(Veg)</li>
                                <li>Trekking Equipment</li>
                                <li>Permits</li>
                                <li>First aid medical kits</li>
                                <li>Qualified and experienced Tour Leader, Guide and support staff.</li>
                                <li>Transportation during trek (as per Markha Valley trek itinerary)</li>
                            </ul>',
            'excludes' => '<ul>
                                <li>Any flight tickets.</li>
                                <li>Sleeping Bags, trekking shoes and clothing.</li>
                                <li>Any Kind of Personal Expenses or Optional Tours / Extra Meals Ordered.</li>
                                <li>Any thing not specifically mentioned under the head &ldquo;Prices Included&rdquo;.</li>
                                <li>Tips, Insurance, Laundry, Phone Calls.</li>
                                <li>Any Kind of Drinks (Alcoholic, Mineral, Aerated)</li>
                                <li>Cost incidental to any change in the itinerary/ stay on account of flight cancellation due to bad weather, ill health, roadblocks and/or any factors beyond control. </li>
                            </ul>',
            'published_at' => Carbon::now(),
            'published' => true
        ]);

        Post::create([
            'title' => 'Amazing Ladakh 02',
            'slug' => 'amazing-ladakh-02',
            'user_id' => '1',
            'category_id' => '2',
            'itinerary_id' => '1',
            'intro' => 'Pangong Lake (14,500ft), through Changla Pass (17,350ft ,third highest motorable road in the world). Enjoy this beautiful color changing high-altitude-lake and also spot the 3-idiot point.',
            'description' => 'Pangong Lake (14,500ft), through Changla Pass (17,350ft ,third highest motorable road in the world). Enjoy this beautiful color changing high-altitude-lake and also spot the 3-idiot point. Khardong-La Pass(18,380ft ,highest motorable road in the world) and take some moment to capture the breathtaking scenery in your camera. Explore Deskit/ Hunder villages and visit monasteries. Also enjoy camel-safari in the sand dunes of hunder.',
            'grade' => 1,
            'start' => '2017-05-02',
            'end' => '',
            'includes' => '<ul>
                                <li>Accommodation Home-stay / Camp </li>
                                <li>Meals while on tour(Veg)</li>
                                <li>Trekking Equipment</li>
                                <li>Permits</li>
                                <li>First aid medical kits</li>
                                <li>Qualified and experienced Tour Leader, Guide and support staff.</li>
                                <li>Transportation during trek (as per Markha Valley trek itinerary)</li>
                            </ul>',
            'excludes' => '<ul>
                                <li>Any flight tickets.</li>
                                <li>Sleeping Bags, trekking shoes and clothing.</li>
                                <li>Any Kind of Personal Expenses or Optional Tours / Extra Meals Ordered.</li>
                                <li>Any thing not specifically mentioned under the head &ldquo;Prices Included&rdquo;.</li>
                                <li>Tips, Insurance, Laundry, Phone Calls.</li>
                                <li>Any Kind of Drinks (Alcoholic, Mineral, Aerated)</li>
                                <li>Cost incidental to any change in the itinerary/ stay on account of flight cancellation due to bad weather, ill health, roadblocks and/or any factors beyond control. </li>
                            </ul>',
            'published_at' => Carbon::now(),
            'published' => true
        ]);

        Post::create([
            'title' => 'Manali Leh Manali 01',
            'slug' => 'manali-leh-manali-01',
            'user_id' => '1',
            'category_id' => '5',
            'itinerary_id' => '2',
            'intro' => 'One of the most beautiful hill station in North nestled in north Himachal Pradesh. Lush green valley waits for your arrival. Your overland safari Mnalai to Ldakh begins very next day of your arrival in Manali to reach at Rohtang Pass ( 13000Ft Appox) which differ Lahaul valley & Spiti valley extreme North + North East of Himachal Pradesh and Manali valley.',
            'description' => 'One of the most beautiful hill station in North nestled in north Himachal Pradesh. Lush green valley waits for your arrival. Your overland safari Mnalai to Ldakh begins very next day of your arrival in Manali to reach at Rohtang Pass ( 13000Ft Appox) which differ Lahaul valley & Spiti valley extreme North + North East of Himachal Pradesh and Manali valley.',
            'grade' => 1,
            'start' => '2017-06-12',
            'end' => '',
            'includes' => 'includes - Manali Leh Manali 01',
            'excludes' => 'excludes - Manali Leh Manali 01',
            'published_at' => Carbon::now(),
            'published' => true
        ]);

        Post::create([
            'title' => 'Manali Leh Manali 02',
            'slug' => 'manali-leh-manali-02',
            'user_id' => '1',
            'category_id' => '5',
            'itinerary_id' => '2',
            'intro' => 'A holiday tour package that amalgamates two of the most exotic tourist destinations of India into one, Essence of Kashmir & Ladakh is one of the best tour packages that one can opt for. On the one hand you will get a chance to spend some fabulous days in the lap of nature in Kashmir and on the other the stark beauty of Ladakh will pamper all your senses.',
            'description' => 'A holiday tour package that amalgamates two of the most exotic tourist destinations of India into one, Essence of Kashmir & Ladakh is one of the best tour packages that one can opt for. On the one hand you will get a chance to spend some fabulous days in the lap of nature in Kashmir and on the other the stark beauty of Ladakh will pamper all your senses.',
            'grade' => 1,
            'start' => '2017-05-22',
            'end' => '',
            'includes' => 'includes - Manali Leh Manali 02',
            'excludes' => 'excludes - Manali Leh Manali 02',
            'published_at' => Carbon::now(),
            'published' => true
        ]);



        // Clients
        for($i = 0; $i < 100; $i++){
            Client::create([
                'name' => $faker->name,
                'email' => $faker->email,
                'mobile' => $faker->phoneNumber,
                'passport' => $faker->phoneNumber,
                'visa' => $faker->phoneNumber,
                'country' => $faker->country,
            ]);
        }
        

        
    }

}

