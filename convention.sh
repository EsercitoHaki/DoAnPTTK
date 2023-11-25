
echo "Testing PSR-2"
phpcs --standard=PSR2 --sniffs=Generic.PHP.LowerCaseConstant tests
phpcs --standard=PSR2 app/Traits
phpcs --standard=PSR2 app/Models
phpcs --standard=PSR2 app/Services
phpcs --standard=PSR2 app/Repositories
phpcs --standard=PSR2 app/Http/Controllers