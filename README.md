# Simple PHP8 Rest API using TDD

### Recommendations:

* When using PHPUnit to test app, Please make sure to add the follwing in the autoload section of `composer.json`
```bash
"autoload":  {
        "classmap": ["namespaceRoot/"]
}
```