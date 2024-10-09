<?php

namespace Database\Factories;

use App\Models\Shop;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Shop>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'shop_id' => Shop::factory(),
            'name' => $this->faker->randomElement([
                '枝豆',
                '梅水晶',
                '冷奴',
                'お新香',
                'ホタルイカ沖漬け',
                'ホタルイカ素干し',
                'いぶりがっこチーズ',
                'もつ煮込み',
                '辛ねぎ炙りチャーシュー',
                '自家製　唐揚げ2個',
                'アジフライ',
                '甘エビの唐揚げ',
                'ポテトフライ',
                '鯵　たたき',
                '鯵　なめろう',
                '鮮魚カルパッチョ',
                'はまぐりの酒蒸し',
                'コーラ',
                '烏龍茶',
                'オレンジジュース',
                'レモンサワー',
                '梅干しサワー',
                'ウーロンハイ',
                'バイスサワー',
                'ホッピーセット',
                'ホッピー　中',
                'ホッピー　外',
                'ハイボール　ホワイトホース',
                'ハイボール　マルス',
                '鳳凰美田（梅酒）',
                '芋・フラミンゴオレンジ',
                '麦・佐藤',
                'キリン　ラガー',
                'キリン　グリーンズフリー',
                '日本酒・文楽',
                '日本酒・豊盃',
                '日本酒・村祐',
                '日本酒・瀧',
                '日本酒・山本純米',
                '日本酒・仙禽',
                '日本酒・赤武',
            ]),
            'category' => $this->faker->word,
            'unit_price' => $this->faker->randomFloat(2, 0, 1000),
            'start_date' => $this->faker->date(),
            'end_date' => $this->faker->date(),
            'image_path' => $this->faker->word,
            'description' => $this->faker->text,
            'version' => $this->faker->randomNumber(),
        ];
    }
}
