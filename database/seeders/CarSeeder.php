<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Car;
use App\Models\Category;

class CarSeeder extends Seeder
{
    public function run(): void
    {
        $cars = [
            ['title' => '2022 Tesla Model 3', 'price' => 45990, 'year' => 2022, 'make' => 'Tesla', 'model' => 'Model 3', 'image_url' => 'images/cars/placeholder.jpg'],
            ['title' => '2021 BMW M4', 'price' => 71800, 'year' => 2021, 'make' => 'BMW', 'model' => 'M4', 'image_url' => 'images/cars/placeholder.jpg'],
            ['title' => '2023 Toyota Camry', 'price' => 26320, 'year' => 2023, 'make' => 'Toyota', 'model' => 'Camry', 'image_url' => 'images/cars/placeholder.jpg'],
            ['title' => '2020 Audi Q7', 'price' => 54800, 'year' => 2020, 'make' => 'Audi', 'model' => 'Q7', 'image_url' => 'images/cars/placeholder.jpg'],
            ['title' => '2022 Ford Mustang', 'price' => 27205, 'year' => 2022, 'make' => 'Ford', 'model' => 'Mustang', 'image_url' => 'images/cars/placeholder.jpg'],
            ['title' => '2023 Honda Civic', 'price' => 23550, 'year' => 2023, 'make' => 'Honda', 'model' => 'Civic', 'image_url' => 'images/cars/placeholder.jpg'],
            ['title' => '2021 Mercedes-Benz C-Class', 'price' => 44350, 'year' => 2021, 'make' => 'Mercedes-Benz', 'model' => 'C-Class', 'image_url' => 'images/cars/placeholder.jpg'],
            ['title' => '2022 Porsche 911', 'price' => 101200, 'year' => 2022, 'make' => 'Porsche', 'model' => '911', 'image_url' => 'images/cars/placeholder.jpg'],
            ['title' => '2023 Hyundai Elantra', 'price' => 20500, 'year' => 2023, 'make' => 'Hyundai', 'model' => 'Elantra', 'image_url' => 'images/cars/placeholder.jpg'],
            ['title' => '2020 Chevrolet Silverado', 'price' => 38700, 'year' => 2020, 'make' => 'Chevrolet', 'model' => 'Silverado', 'image_url' => 'images/cars/placeholder.jpg'],
            ['title' => '2021 Subaru Outback', 'price' => 28240, 'year' => 2021, 'make' => 'Subaru', 'model' => 'Outback', 'image_url' => 'images/cars/placeholder.jpg'],
            ['title' => '2022 Volvo XC90', 'price' => 50000, 'year' => 2022, 'make' => 'Volvo', 'model' => 'XC90', 'image_url' => 'images/cars/placeholder.jpg'],
            ['title' => '2023 Kia Telluride', 'price' => 35290, 'year' => 2023, 'make' => 'Kia', 'model' => 'Telluride', 'image_url' => 'images/cars/placeholder.jpg'],
            ['title' => '2021 Mazda CX-5', 'price' => 26270, 'year' => 2021, 'make' => 'Mazda', 'model' => 'CX-5', 'image_url' => 'images/cars/placeholder.jpg'],
            ['title' => '2022 Jeep Wrangler', 'price' => 31800, 'year' => 2022, 'make' => 'Jeep', 'model' => 'Wrangler', 'image_url' => 'images/cars/placeholder.jpg'],
            ['title' => '2023 Nissan Altima', 'price' => 25300, 'year' => 2023, 'make' => 'Nissan', 'model' => 'Altima', 'image_url' => 'images/cars/placeholder.jpg'],
            ['title' => '2021 Lexus RX 350', 'price' => 48200, 'year' => 2021, 'make' => 'Lexus', 'model' => 'RX 350', 'image_url' => 'images/cars/placeholder.jpg'],
            ['title' => '2022 Dodge Challenger', 'price' => 31200, 'year' => 2022, 'make' => 'Dodge', 'model' => 'Challenger', 'image_url' => 'images/cars/placeholder.jpg'],
            ['title' => '2023 Volkswagen Golf', 'price' => 24700, 'year' => 2023, 'make' => 'Volkswagen', 'model' => 'Golf', 'image_url' => 'images/cars/placeholder.jpg'],
            ['title' => '2020 Ford F-150', 'price' => 33400, 'year' => 2020, 'make' => 'Ford', 'model' => 'F-150', 'image_url' => 'images/cars/placeholder.jpg'],
            ['title' => '2021 Chevrolet Camaro', 'price' => 35600, 'year' => 2021, 'make' => 'Chevrolet', 'model' => 'Camaro', 'image_url' => 'images/cars/placeholder.jpg'],
            ['title' => '2022 Toyota RAV4', 'price' => 28400, 'year' => 2022, 'make' => 'Toyota', 'model' => 'RAV4', 'image_url' => 'images/cars/placeholder.jpg'],
            ['title' => '2023 BMW 3 Series', 'price' => 42700, 'year' => 2023, 'make' => 'BMW', 'model' => '3 Series', 'image_url' => 'images/cars/placeholder.jpg'],
            ['title' => '2021 Audi A4', 'price' => 39200, 'year' => 2021, 'make' => 'Audi', 'model' => 'A4', 'image_url' => 'images/cars/placeholder.jpg'],
            ['title' => '2022 Mercedes E-Class', 'price' => 56000, 'year' => 2022, 'make' => 'Mercedes-Benz', 'model' => 'E-Class', 'image_url' => 'images/cars/placeholder.jpg'],
            ['title' => '2023 Porsche Cayenne', 'price' => 70500, 'year' => 2023, 'make' => 'Porsche', 'model' => 'Cayenne', 'image_url' => 'images/cars/placeholder.jpg'],
            ['title' => '2020 Tesla Model X', 'price' => 84990, 'year' => 2020, 'make' => 'Tesla', 'model' => 'Model X', 'image_url' => 'images/cars/placeholder.jpg'],
            ['title' => '2021 Volvo XC60', 'price' => 43500, 'year' => 2021, 'make' => 'Volvo', 'model' => 'XC60', 'image_url' => 'images/cars/placeholder.jpg'],
            ['title' => '2022 Hyundai Sonata', 'price' => 24400, 'year' => 2022, 'make' => 'Hyundai', 'model' => 'Sonata', 'image_url' => 'images/cars/placeholder.jpg'],
            ['title' => '2023 Kia Sportage', 'price' => 26400, 'year' => 2023, 'make' => 'Kia', 'model' => 'Sportage', 'image_url' => 'images/cars/placeholder.jpg'],
            ['title' => '2021 Mazda 3', 'price' => 21800, 'year' => 2021, 'make' => 'Mazda', 'model' => '3', 'image_url' => 'images/cars/placeholder.jpg'],
            ['title' => '2022 Subaru Forester', 'price' => 27500, 'year' => 2022, 'make' => 'Subaru', 'model' => 'Forester', 'image_url' => 'images/cars/placeholder.jpg'],
            ['title' => '2023 Nissan Rogue', 'price' => 27600, 'year' => 2023, 'make' => 'Nissan', 'model' => 'Rogue', 'image_url' => 'images/cars/placeholder.jpg'],
            ['title' => '2021 Ford Explorer', 'price' => 34400, 'year' => 2021, 'make' => 'Ford', 'model' => 'Explorer', 'image_url' => 'images/cars/placeholder.jpg'],
            ['title' => '2022 Chevrolet Equinox', 'price' => 26800, 'year' => 2022, 'make' => 'Chevrolet', 'model' => 'Equinox', 'image_url' => 'images/cars/placeholder.jpg'],
            ['title' => '2023 Toyota Highlander', 'price' => 38200, 'year' => 2023, 'make' => 'Toyota', 'model' => 'Highlander', 'image_url' => 'images/cars/placeholder.jpg'],
            ['title' => '2021 Honda Accord', 'price' => 25800, 'year' => 2021, 'make' => 'Honda', 'model' => 'Accord', 'image_url' => 'images/cars/placeholder.jpg'],
            ['title' => '2022 BMW X5', 'price' => 60300, 'year' => 2022, 'make' => 'BMW', 'model' => 'X5', 'image_url' => 'images/cars/placeholder.jpg'],
            ['title' => '2023 Audi Q5', 'price' => 44500, 'year' => 2023, 'make' => 'Audi', 'model' => 'Q5', 'image_url' => 'images/cars/placeholder.jpg'],
            ['title' => '2021 Mercedes GLC', 'price' => 42900, 'year' => 2021, 'make' => 'Mercedes-Benz', 'model' => 'GLC', 'image_url' => 'images/cars/placeholder.jpg'],
            ['title' => '2022 Porsche Panamera', 'price' => 88400, 'year' => 2022, 'make' => 'Porsche', 'model' => 'Panamera', 'image_url' => 'images/cars/placeholder.jpg'],
            ['title' => '2023 Tesla Model Y', 'price' => 49990, 'year' => 2023, 'make' => 'Tesla', 'model' => 'Model Y', 'image_url' => 'images/cars/placeholder.jpg'],
            ['title' => '2020 Lexus IS 300', 'price' => 38600, 'year' => 2020, 'make' => 'Lexus', 'model' => 'IS 300', 'image_url' => 'images/cars/placeholder.jpg'],
            ['title' => '2021 Jeep Grand Cherokee', 'price' => 37300, 'year' => 2021, 'make' => 'Jeep', 'model' => 'Grand Cherokee', 'image_url' => 'images/cars/placeholder.jpg'],
            ['title' => '2022 Dodge Durango', 'price' => 38300, 'year' => 2022, 'make' => 'Dodge', 'model' => 'Durango', 'image_url' => 'images/cars/placeholder.jpg'],
            ['title' => '2023 Volkswagen Tiguan', 'price' => 27100, 'year' => 2023, 'make' => 'Volkswagen', 'model' => 'Tiguan', 'image_url' => 'images/cars/placeholder.jpg'],
            ['title' => '2021 Ford Bronco', 'price' => 30700, 'year' => 2021, 'make' => 'Ford', 'model' => 'Bronco', 'image_url' => 'images/cars/placeholder.jpg'],
            ['title' => '2022 Chevrolet Corvette', 'price' => 62500, 'year' => 2022, 'make' => 'Chevrolet', 'model' => 'Corvette', 'image_url' => 'images/cars/placeholder.jpg'],
            ['title' => '2023 Toyota 4Runner', 'price' => 38800, 'year' => 2023, 'make' => 'Toyota', 'model' => '4Runner', 'image_url' => 'images/cars/placeholder.jpg'],
            ['title' => '2021 Honda CR-V', 'price' => 26900, 'year' => 2021, 'make' => 'Honda', 'model' => 'CR-V', 'image_url' => 'images/cars/placeholder.jpg'],
            ['title' => '2022 BMW 7 Series', 'price' => 86200, 'year' => 2022, 'make' => 'BMW', 'model' => '7 Series', 'image_url' => 'images/cars/placeholder.jpg'],
            ['title' => '2023 Audi Q3', 'price' => 35900, 'year' => 2023, 'make' => 'Audi', 'model' => 'Q3', 'image_url' => 'images/cars/placeholder.jpg'],
            ['title' => '2021 Mercedes S-Class', 'price' => 111000, 'year' => 2021, 'make' => 'Mercedes-Benz', 'model' => 'S-Class', 'image_url' => 'images/cars/placeholder.jpg'],
            ['title' => '2022 Porsche Macan', 'price' => 53200, 'year' => 2022, 'make' => 'Porsche', 'model' => 'Macan', 'image_url' => 'images/cars/placeholder.jpg'],
            ['title' => '2023 Tesla Model S', 'price' => 74990, 'year' => 2023, 'make' => 'Tesla', 'model' => 'Model S', 'image_url' => 'images/cars/placeholder.jpg'],
            ['title' => '2021 Lexus NX 300', 'price' => 39500, 'year' => 2021, 'make' => 'Lexus', 'model' => 'NX 300', 'image_url' => 'images/cars/placeholder.jpg'],
            ['title' => '2022 Jeep Cherokee', 'price' => 28900, 'year' => 2022, 'make' => 'Jeep', 'model' => 'Cherokee', 'image_url' => 'images/cars/placeholder.jpg'],
            ['title' => '2023 Dodge Charger', 'price' => 32200, 'year' => 2023, 'make' => 'Dodge', 'model' => 'Charger', 'image_url' => 'images/cars/placeholder.jpg'],
            ['title' => '2021 Volkswagen Passat', 'price' => 23900, 'year' => 2021, 'make' => 'Volkswagen', 'model' => 'Passat', 'image_url' => 'images/cars/placeholder.jpg'],
            ['title' => '2022 Ford Edge', 'price' => 31200, 'year' => 2022, 'make' => 'Ford', 'model' => 'Edge', 'image_url' => 'images/cars/placeholder.jpg'],
            ['title' => '2023 Chevrolet Traverse', 'price' => 34100, 'year' => 2023, 'make' => 'Chevrolet', 'model' => 'Traverse', 'image_url' => 'images/cars/placeholder.jpg'],
            ['title' => '2021 Toyota Tundra', 'price' => 35900, 'year' => 2021, 'make' => 'Toyota', 'model' => 'Tundra', 'image_url' => 'images/cars/placeholder.jpg'],
            ['title' => '2022 Honda Pilot', 'price' => 37600, 'year' => 2022, 'make' => 'Honda', 'model' => 'Pilot', 'image_url' => 'images/cars/placeholder.jpg'],
            ['title' => '2023 BMW X3', 'price' => 45600, 'year' => 2023, 'make' => 'BMW', 'model' => 'X3', 'image_url' => 'images/cars/placeholder.jpg'],
            ['title' => '2021 Audi A6', 'price' => 55200, 'year' => 2021, 'make' => 'Audi', 'model' => 'A6', 'image_url' => 'images/cars/placeholder.jpg'],
            ['title' => '2022 Mercedes GLB', 'price' => 39300, 'year' => 2022, 'make' => 'Mercedes-Benz', 'model' => 'GLB', 'image_url' => 'images/cars/placeholder.jpg'],
            ['title' => '2023 Porsche Taycan', 'price' => 85900, 'year' => 2023, 'make' => 'Porsche', 'model' => 'Taycan', 'image_url' => 'images/cars/placeholder.jpg'],
            ['title' => '2020 Tesla Roadster', 'price' => 200000, 'year' => 2020, 'make' => 'Tesla', 'model' => 'Roadster', 'image_url' => 'images/cars/placeholder.jpg'],
            ['title' => '2021 Volvo S60', 'price' => 39200, 'year' => 2021, 'make' => 'Volvo', 'model' => 'S60', 'image_url' => 'images/cars/placeholder.jpg'],
            ['title' => '2022 Hyundai Santa Fe', 'price' => 29800, 'year' => 2022, 'make' => 'Hyundai', 'model' => 'Santa Fe', 'image_url' => 'images/cars/placeholder.jpg'],
            ['title' => '2023 Kia Sorento', 'price' => 31200, 'year' => 2023, 'make' => 'Kia', 'model' => 'Sorento', 'image_url' => 'images/cars/placeholder.jpg'],
            ['title' => '2021 Mazda CX-9', 'price' => 34800, 'year' => 2021, 'make' => 'Mazda', 'model' => 'CX-9', 'image_url' => 'images/cars/placeholder.jpg'],
            ['title' => '2022 Subaru Crosstrek', 'price' => 24000, 'year' => 2022, 'make' => 'Subaru', 'model' => 'Crosstrek', 'image_url' => 'images/cars/placeholder.jpg'],
            ['title' => '2023 Nissan Frontier', 'price' => 28900, 'year' => 2023, 'make' => 'Nissan', 'model' => 'Frontier', 'image_url' => 'images/cars/placeholder.jpg'],
            ['title' => '2021 Ford F-250', 'price' => 41300, 'year' => 2021, 'make' => 'Ford', 'model' => 'F-250', 'image_url' => 'images/cars/placeholder.jpg'],
            ['title' => '2022 Chevrolet Tahoe', 'price' => 49400, 'year' => 2022, 'make' => 'Chevrolet', 'model' => 'Tahoe', 'image_url' => 'images/cars/placeholder.jpg'],
            ['title' => '2023 Toyota Tacoma', 'price' => 28600, 'year' => 2023, 'make' => 'Toyota', 'model' => 'Tacoma', 'image_url' => 'images/cars/placeholder.jpg'],
            ['title' => '2021 Honda Ridgeline', 'price' => 36700, 'year' => 2021, 'make' => 'Honda', 'model' => 'Ridgeline', 'image_url' => 'images/cars/placeholder.jpg'],
            ['title' => '2022 BMW 5 Series', 'price' => 54800, 'year' => 2022, 'make' => 'BMW', 'model' => '5 Series', 'image_url' => 'images/cars/placeholder.jpg'],
            ['title' => '2023 Audi A3', 'price' => 33900, 'year' => 2023, 'make' => 'Audi', 'model' => 'A3', 'image_url' => 'images/cars/placeholder.jpg'],
            ['title' => '2021 Mercedes GLE', 'price' => 55300, 'year' => 2021, 'make' => 'Mercedes-Benz', 'model' => 'GLE', 'image_url' => 'images/cars/placeholder.jpg'],
            ['title' => '2022 Porsche 718 Cayman', 'price' => 61900, 'year' => 2022, 'make' => 'Porsche', 'model' => '718 Cayman', 'image_url' => 'images/cars/placeholder.jpg'],
            ['title' => '2023 Lexus ES 350', 'price' => 41200, 'year' => 2023, 'make' => 'Lexus', 'model' => 'ES 350', 'image_url' => 'images/cars/placeholder.jpg'],
            ['title' => '2021 Jeep Compass', 'price' => 24400, 'year' => 2021, 'make' => 'Jeep', 'model' => 'Compass', 'image_url' => 'images/cars/placeholder.jpg'],
            ['title' => '2022 Dodge Journey', 'price' => 22600, 'year' => 2022, 'make' => 'Dodge', 'model' => 'Journey', 'image_url' => 'images/cars/placeholder.jpg'],
            ['title' => '2023 Volkswagen Arteon', 'price' => 39900, 'year' => 2023, 'make' => 'Volkswagen', 'model' => 'Arteon', 'image_url' => 'images/cars/placeholder.jpg'],
            ['title' => '2021 Ford Transit', 'price' => 36400, 'year' => 2021, 'make' => 'Ford', 'model' => 'Transit', 'image_url' => 'images/cars/placeholder.jpg'],
            ['title' => '2022 Chevrolet Bolt', 'price' => 26300, 'year' => 2022, 'make' => 'Chevrolet', 'model' => 'Bolt', 'image_url' => 'images/cars/placeholder.jpg'],
            ['title' => '2023 Toyota Supra', 'price' => 43700, 'year' => 2023, 'make' => 'Toyota', 'model' => 'Supra', 'image_url' => 'images/cars/placeholder.jpg'],
            ['title' => '2021 Honda Fit', 'price' => 17200, 'year' => 2021, 'make' => 'Honda', 'model' => 'Fit', 'image_url' => 'images/cars/placeholder.jpg'],
            ['title' => '2022 BMW X7', 'price' => 74800, 'year' => 2022, 'make' => 'BMW', 'model' => 'X7', 'image_url' => 'images/cars/placeholder.jpg'],
            ['title' => '2023 Audi Q8', 'price' => 68300, 'year' => 2023, 'make' => 'Audi', 'model' => 'Q8', 'image_url' => 'images/cars/placeholder.jpg'],
            ['title' => '2021 Mercedes CLA', 'price' => 36700, 'year' => 2021, 'make' => 'Mercedes-Benz', 'model' => 'CLA', 'image_url' => 'images/cars/placeholder.jpg'],
            ['title' => '2022 Porsche Cayman GT4', 'price' => 100400, 'year' => 2022, 'make' => 'Porsche', 'model' => 'Cayman GT4', 'image_url' => 'images/cars/placeholder.jpg'],
            ['title' => '2023 Tesla Cybertruck', 'price' => 39990, 'year' => 2023, 'make' => 'Tesla', 'model' => 'Cybertruck', 'image_url' => 'images/cars/placeholder.jpg'],
            ['title' => '2021 Lexus GX 460', 'price' => 53600, 'year' => 2021, 'make' => 'Lexus', 'model' => 'GX 460', 'image_url' => 'images/cars/placeholder.jpg'],
            ['title' => '2022 Jeep Gladiator', 'price' => 34800, 'year' => 2022, 'make' => 'Jeep', 'model' => 'Gladiator', 'image_url' => 'images/cars/placeholder.jpg'],
            ['title' => '2023 Dodge Hornet', 'price' => 30500, 'year' => 2023, 'make' => 'Dodge', 'model' => 'Hornet', 'image_url' => 'images/cars/placeholder.jpg'],
        ];

        $categories = Category::pluck('id')->toArray();

        foreach($cars as $car) {
            // Assign a random category ID (if categories exist)
            if (!empty($categories)) {
                $car['category_id'] = $categories[array_rand($categories)];
            } else {
                $car['category_id'] = null;
            }
            Car::create($car);
        }
    }
}
