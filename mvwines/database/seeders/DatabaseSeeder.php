<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Vineyard;
use App\Models\Wine;
use App\Models\Winetype;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        // Vineyard::factory(10)->create();
        // Winetype::factory(10)->create();
        // Wine::factory(20)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        // Vineyard Data
        Vineyard::factory()->create(
            [
                'name' => 'Chateau Lafite',
                'region' => 'Bordeaux',
            ]
        );
        Vineyard::factory()->create(
            [
                'name' => 'Domaine de la Romanée-Conti',
                'region' => 'Burgundy',
            ]
        );
        Vineyard::factory()->create(
            [
                'name' => 'Screaming Eagle',
                'region' => 'Napa Valley',
            ]
        );
        Vineyard::factory()->create(
            [
                'name' => 'Penfolds',
                'region' => 'Barossa Valley',
            ]
        );
        Vineyard::factory()->create(
            [
                'name' => 'Opus One',
                'region' => 'Napa Valley',
            ]
        );
        Vineyard::factory()->create(
            [
                'name' => 'Torres',
                'region' => 'Penedès',
            ]
        );
        Vineyard::factory()->create(
            [
                'name' => 'Casillero del Diablo',
                'region' => 'Maipo Valley',
            ]
        );
        Vineyard::factory()->create(
            [
                'name' => 'Cloudy Bay',
                'region' => 'Marlborough',
            ]
        );
        Vineyard::factory()->create(
            [
                'name' => 'Concha y Toro',
                'region' => 'Maipo Valley',
            ]
        );
        Vineyard::factory()->create(
            [
                'name' => 'Antinori',
                'region' => 'Tuscany',
            ]
        );

        // Winetype Data
        Winetype::factory()->create([
            'name' => 'Red',
        ]);
        Winetype::factory()->create([
            'name' => 'Rose',
        ]);
        Winetype::factory()->create([
            'name' => 'White',
        ]);
        Winetype::factory()->create([
            'name' => 'Sparkling',
        ]);
        Winetype::factory()->create([
            'name' => 'Dessert',
        ]);
        Winetype::factory()->create([
            'name' => 'Fortified',
        ]);
        Winetype::factory()->create([
            'name' => 'Other',
        ]);

        // Wine Data
        Wine::factory()->create([
            'name' => "Chateau Lafite Rothschild",
            'type_id' => 1,
            'vineyard_id' => 1,
            'rating' => 94.0,
            'price' => 1000.00,
            'image' => "https://www.canadianliquorstore.ca/cdn/shop/files/8827805-7.jpg?v=1685330184&width=3750",
        ]);
        Wine::factory()->create([
            'name' => "Domaine de la Romanée-Conti Romanée-Conti",
            'type_id' => 1,
            'vineyard_id' => 2,
            'rating' => 98.0,
            'price' => 5000.00,
            'image' => "https://image.harrods.com/domaine-de-la-romanee-conti-romanee-conti-grand-cru-2020-75cl-burgundy-france_19907008_47825818_2048.jpg",
        ]);
        Wine::factory()->create([
            'name' => "Screaming Eagle Cabernet Sauvignon",
            'type_id' => 1,
            'vineyard_id' => 3,
            'rating' => 97.0,
            'price' => 3000.00,
            'image' => "https://auction.zachys.com/ItemImages/000034/34884a_lg.jpeg",
        ]);
        Wine::factory()->create([
            'name' => "Opus One Cabernet Sauvignon",
            'type_id' => 1,
            'vineyard_id' => 5,
            'rating' => 92.0,
            'price' => 400.00,
            'image' => "https://cdn.shopify.com/s/files/1/2479/4148/products/8253642-OPUS-ONE-2016_1600x.jpg?v=1675362874",
        ]);
        Wine::factory()->create([
            'name' => "Torres Mas La Plana",
            'type_id' => 1,
            'vineyard_id' => 6,
            'rating' => 91.0,
            'price' => 200.00,
            'image' => "https://elhorreopr.com/image/cache/catalog/products/720034-600x600.jpg",
        ]);
        Wine::factory()->create([
            'name' => "Casillero del Diablo Reserva Privada",
            'type_id' => 1,
            'vineyard_id' => 7,
            'rating' => 88.0,
            'price' => 50.00,
            'image' => "https://walmartcr.vtexassets.com/arquivos/ids/499944-800-450?v=638415023393830000&width=800&height=450&aspect=true",
        ]);
        Wine::factory()->create([
            'name' => "Cloudy Bay Sauvignon Blanc",
            'type_id' => 2,
            'vineyard_id' => 8,
            'rating' => 90.0,
            'price' => 30.00,
            'image' => "https://www.everythingwine.ca/media/catalog/product/3/0/304469_cloudy_bay_sauv_blanc.jpg?quality=80&bg-color=255	255	255&fit=bounds&height=700&width=700&canvas=700:700",
        ]);
        Wine::factory()->create([
            'name' => "Concha y Toro Don Melchor Cabernet Sauvignon",
            'type_id' => 1,
            'vineyard_id' => 9,
            'rating' => 89.0,
            'price' => 80.00,
            'image' => "https://www.myicellar.com/imgstore/s52/don-melchor-concha-y-toro-don-melchor-cabernet-sauvignon-2015-13977.jpg?z=1111",
        ]);
        Wine::factory()->create([
            'name' => "Antinori Tignanello",
            'type_id' => 1,
            'vineyard_id' => 10,
            'rating' => 93.0,
            'price' => 150.00,
            'image' => "https://www.parcellewine.shop/wp-content/uploads/1690/75/antinori-tignanello-1986-antinori-discover-the-latest-fashion-trends-and-order-now_0.jpg",
        ]);
        Wine::factory()->create([
            'name' => "Domaine Weinbach Gewürztraminer",
            'type_id' => 2,
            'vineyard_id' => 10,
            'rating' => 88.0,
            'price' => 40.00,
            'image' => "https://horizonlives3.diageohorizon.com/PR1600/media/images/bottles/imported/B08740%20Gewurztraminer	%20Grand%20Cru	%20Furstentum	%20Weinbach%20copy.jpg",
        ]);
        Wine::factory()->create([
            'name' => "Dom Pérignon Brut",
            'type_id' => 4,
            'vineyard_id' => 9,
            'rating' => 96.0,
            'price' => 300.00,
            'image' => "https://www.mybottleshop.au/media/catalog/product/d/o/dom-perignon-2003-brut-vintage-champagne-1-5ltr_1_1.jpg",
        ]);
        Wine::factory()->create([
            'name' => "Château d'Yquem Sauternes",
            'type_id' => 5,
            'vineyard_id' => 6,
            'rating' => 97.0,
            'price' => 500.00,
            'image' => "https://marketwines.ca/wp-content/uploads/2023/02/Chateau-Yquem-2010.jpg",
        ]);
        Wine::factory()->create([
            'name' => "Taylor's Vintage Port",
            'type_id' => 6,
            'vineyard_id' => 5,
            'rating' => 95.0,
            'price' => 100.00,
            'image' => "https://aem.lcbo.com/content/dam/lcbo/products/0/4/6/9/046946.jpg.thumb.1280.1280.jpg",
        ]);
        Wine::factory()->create([
            'name' => "Ruinart Blanc de Blancs Champagne",
            'type_id' => 4,
            'vineyard_id' => 1,
            'rating' => 92.0,
            'price' => 80.00,
            'image' => "https://www.granchateaux.ch/media/catalog/product/cache/413dcc74255263d80df2abd4a737fce6/f/r/frch073_1.jpg",
        ]);
        Wine::factory()->create([
            'name' => "Bodegas Valdespino Pedro Ximénez Sherry",
            'type_id' => 6,
            'vineyard_id' => 5,
            'rating' => 91.0,
            'price' => 60.00,
            'image' => "https://www.mycellars.com.au/wp-content/uploads/2017/06/valdespino-el-candado-pedro-ximenez-sherry-new.jpg",
        ]);
        Wine::factory()->create([
            'name' => "Louis Roederer Cristal Brut Champagne",
            'type_id' => 4,
            'vineyard_id' => 7,
            'rating' => 94.0,
            'price' => 400.00,
            'image' => "https://cdn.shopify.com/s/files/1/0956/4184/files/1996LouisRoedererCristalVintageBrutChampagne.jpg?height=645&pad_color=fff&v=1694818784&width=465",
        ]);
        Wine::factory()->create([
            'name' => "Chateau Musar Rouge",
            'type_id' => 1,
            'vineyard_id' => 4,
            'rating' => 90.0,
            'price' => 50.00,
            'image' => "https://applejack.com/site/images/Chateau-Musar-Levantine-de-Musar-Rouge-750-ml_1.png",
        ]);
        Wine::factory()->create([
            'name' => "Cloudy Bay Te Koko",
            'type_id' => 2,
            'vineyard_id' => 8,
            'rating' => 91.0,
            'price' => 60.00,
            'image' => "https://thechampagnecompany.com/media/catalog/product/cache/fff7f3f83de0de5d4401f282ee5171d0/c/l/cloudy_bay_te_koko_2016_1.jpg",
        ]);
        Wine::factory()->create([
            'name' => "Dom Pérignon Rosé",
            'type_id' => 4,
            'vineyard_id' => 2,
            'rating' => 95.0,
            'price' => 400.00,
            'image' => "https://www.n-wines.com/wp-content/uploads/2022/09/Dom-Perignon-Rose-Luminous-2006-Magnum.jpg",
        ]);
        Wine::factory()->create([
            'name' => "Mare Di Sirena Pinot Grigio",
            'type_id' => 2,
            'vineyard_id' => 5,
            'rating' => 76.0,
            'price' => 165.00,
            'image' => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/0/0/020054.jpg.thumb.1280.1280.jpg",
        ]);
    }
}
