# DB Transaction

## Description
To Create Transaction for multiple table process, no need for single transaction

## Usage Examples
1. DB::begin transaction
```php

 try { DB::beginTransaction();
       
             $bank =  Bank::create([
                      'vname' => Str::ucfirst($this->vname),
                      'active_id' => $this->active_id,
                    ]);
                    
                    ClientBank::create([
                    'bank_id' => $bank->id
                    'bank_name' ....
                    ]);
                // Do something and save to the db...

                // Commit the transaction

            DB::commit();

        } catch (\Exception $e) {
            DB::rollback();
            throw $e;
        }

```

2. Multiple database save

```php

        DB::connection('mysql')->beginTransaction();
        try {
            DB::connection('mysql')->table('users')->update(['name' => 'John']);
            DB::connection('pgsql')->beginTransaction();
            DB::connection('pgsql')->table('orders')->update(['status' => 'shipped']);
            DB::connection('pgsql')->commit();
            DB::connection('mysql')->commit();
        } catch (\Exception $e) {
            DB::connection('mysql')->rollBack();
            DB::connection('pgsql')->rollBack();
            throw $e;
        }

```
