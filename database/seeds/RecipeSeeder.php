<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
class RecipeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $currentTime = Carbon::now();
        DB::table('recipes')->insert([
            'name' => 'musaka',
            'introduction' => 'Moussaka is beloved Balkan and Middle East dish. Its preparation depends on the region. In Bulgaria Moussaka is based on potatoes and ground meat. The meal is served warm and Bulgarians eat it very often simply because it’s super delicious and easy to cook.
Moussaka is the perfect dish if you are in Bulgaria and want to experience traditional recipes along with banitsa, shopska salad and tarator. The yogurt and eggs layer on top gives the dish a unique taste which you can’t find anywhere else. The Greek Moussaka uses eggplant rather than potatoes.',
            'picture' => 'https://i.imgur.com/geiy3Nb.jpg',
            'ingredients' => '2 lb (~1 kg) potatoes, cut in small cubes
1 lb (1/2 kg) ground meat
1 onion, chopped
2 cups milk
4 eggs
1/2 cup oil
2 tablespoons paprika
1 tablespoon salt
1 teaspoon crushed black pepper
',
            'step1' => 'Start with cooking the onion in a pan with 1/4 oil until golden brown. Then add the ground meat, the pepper, the paprika, and half the salt. Fry until meat gets brown and then remove the pan from the heat.',
            'step2' => 'Mix well with the potatoes and the other 1/2 tablespoon of salt. Add the mixture in a casserole pan with the rest of the oil. Bake in oven for about 40 minutes on 425 F (~220 C).
',
            'step3' => 'In the meantime mix the milk and the eggs separately and pour on top of the meal for the last 10 minutes in the oven untill it turns brownish.',
            'created_at' => $currentTime,
            'updated_at' => $currentTime
        ]);

        DB::table('recipes')->insert([
            'name' => 'tarator',
            'introduction' => 'This cold soup is among Bulgarians favorite foods for the summer. It is served as a first course instead of a salad or between meals as refreshment. You might even see it served in a glass. Most men here say it goes great with a glass of cold rakiya (Bulgarian grape or fruit brandy) or Ouzo.
',
            'picture' => 'https://i.imgur.com/9T9mjsH.jpg',
            'ingredients' => '2 cucumbers (about 500 g or 1 lb)
500 g plain yogurt (1 lb)
3 -4 garlic cloves
2-3 tablespoons of crushed walnuts (optional)
1 bunch fresh dill
oil
salt
water (optional)',
            'step1' => 'Cut the cucumbers into cubes and put them in a bowl. You may aslo grate them but it changes the look and the consistency. Beat the yogurt with a fork until it gets liquid and pour it over the cucumbers.',
            'step2' => 'Add the crushed garlic, the walnuts and the minced dill as well as salt and oil to taste. If needed add some water to make the soup as liquid as you like but take care not to make it too "thin".',
            'step3' => 'Put into the refrigerator to cool or add ice cubes. Serve cold.',
            'created_at' => $currentTime,
            'updated_at' => $currentTime]);
        DB::table('recipes')->insert([
            'name' => 'banitsa',
            'introduction' => 'The Bulgarian word banitsa (баница) derives from the old Bulgarian (гъбнѫти) and means “to lie down”. In Bulgaria, banitsa is a symbol of Bulgarian cuisine and traditions. Banitsa is a filled pastry that can be sweet or savory depending on the ingredients used.
A Bulgarian legend says that when God created the world, he gave some countries the most beautiful sea, others the desert, others the pastures and the mountains. When it was Bulgaria’s turn, there was nothing left to give and God took the best pieces of the other countries and offered them to Bulgaria.',
            'picture' => 'https://i.imgur.com/uQ1eVF9.jpg',
            'ingredients' => '16 sheets phyllo dough, thawed
2 cups feta cheese
1 teaspoon salts
3⁄4 cup butter (melted)
1 cup milk',
            'step1' => 'Preheat oven to 350 degrees, ( glass pyrex pan works great for this recipe) brush melted butter all over bottom amd sides of baking pan.',
            'step2' => 'Mix salt, cheese and milk and eggsin a bowl , combine and stir ingredients well.',
            'step3' => 'Put down 5 sheets of phyllo dough down in buttered pan and brush over with melted butter. You can also put down one sheet at a time and butter seperatelly.',
            'step4' => 'Pour enough of the mixture to cover phyllo sheets and top with 3 more sheets.',
            'step5' => 'Continue to repeat the process: put down 3 sheets and make sure to brush them well with butter then layer with mixture until all of the mixture is done, then cover with atleast 2 sheets. I preffer not to butter the top sheets as they tend to get very hard after the banitsa is done baking.',
            'step6' => 'Bake for 25-35 minutes or until golden, make sure mixture is cooked in the middle by cutting into banitsa. When the mixture is cooked it will not be runny.',
            'step7' => 'Once banitsa is done cover it with either a towell or the lid to the pan and let it sit and cool before cutting it or serving. Covering it lets the steam soften the phyllo dough sheets.',
            'created_at' => $currentTime,
            'updated_at' => $currentTime ]);
        DB::table('recipes')->insert([
            'name' => 'kavarma',
            'introduction' => 'This is one of the most popular meals in Bulgaria which is not so famous outside the country. The ingredients and preparations depend on the region. Almost every part of Bulgaria has itÃ¢â‚¬â„¢s own Kavarma recipe. In general, the meal consists of marinated cooked meat and vegetables. It could be mild or spicy depending on the region and the likings. Goes perfectly well with beer or rakia.',
            'picture' => 'https://i.imgur.com/VXBPYo5.jpg',
            'ingredients' => '2 lbs pork meat, cut into cubes
1/2 cup oil
2 big leaks
1 tablespoon tomato sauce or puree
1 tablespoon paprika
a pinch of crushed black pepper
1 cup red or white wine
1 onion, chopped
2 carrots
2 bay leaves
a pinch of parsley
1 hot pepper',
            'step1' => 'Combine wine, tomato sauce, paprika and black pepper to make the marinade. Add the cut in discs carrots to the pork and cook in very hot oil until meat starts to brown. ',
            'step2' => 'Take out and soak in the marinade for about 30 minutes. ',
            'step3' => 'Use the same hot oil to cook the cut in discs leaks, add 1/2 cup water to it and cook while soft (about 5 minutes). Add meat and remaining marinade to the leaks, reduce the heat and simmer until most of the water is gone. ',
            'step4' => 'Add the bay leaves, shopped onion, and the hot pepper and cook for about 5 more minutes. Sprinkle with parsley and serve. Goes well with French fries or white rice.',
            'created_at' => $currentTime,
            'updated_at' => $currentTime ]);
    }
}
