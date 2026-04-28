public function run(): void
{
    $categories = Category::all();

    foreach ($categories as $category) {
        for ($i = 1; $i <= 10; $i++) {
            Product::create([
                'category_id' => $category->id,
                'name' => $category->name . ' ' . $i,
                'price' => rand(10000, 100000),
                'stock' => rand(1, 50),
            ]);
        }
    }
}
