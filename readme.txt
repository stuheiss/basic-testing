Welcome to basic PHP testing!

Treat this as a refresher in how to get started with PHP testing.

Branch "master" only contains readme.txt. Learn by doing :-)

If you get stuck, checkout branch "instructions" for detailed instructions.
If you need more help, checkout branch "solutions" for solutions.

Challenge:

Your challenge is to create and test classes Foo and Bar in each playground.

Setup three playgrounds in directories named:
    laravel-playground
    phpunit-playground
    codeception-playground

In the cases of phpunit-playground and codeception-playground you will need to configure composer with psr-4 namespacing and autoloading.
For consistency, use namespace "App" in each playground.
Create subdirs "src" and "test"; source files go in "src" and test files under "test".

For laravel, create a vanilla instance in laravel-playground.
Laravel will configure composer and namespacing for you.
Create subdir "app/Repositories" and put your source files in that directory using namespace "App\Repositories".

Unit Tests:

The Foo class constructor shall be injected with an instance of the Bar class.

Create a separate unit test for each class.
Create another unit test for Foo that mocks Bar.

