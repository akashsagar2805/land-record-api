Land Record API
 A simple Laravel-based API that simulates the core functionality of Landeed.com by accepting a search input, querying a MySQL database, and generating a downloadable PDF with the results.

 ## Setup Instructions
 1. **Clone the Repository**:
    ```bash
    git clone https://github.com/akashsagar2805/land-record-api.git
    cd land-record-api
    ```

 2. **Install Dependencies**:
    ```bash
    composer install
    ```

 3. **Configure Environment**:
    - Copy `.env.example` to `.env` and set up your MySQL database:
      ```env
      DB_CONNECTION=mysql
      DB_HOST=127.0.0.1
      DB_PORT=3306
      DB_DATABASE=land_records
      DB_USERNAME=your_username
      DB_PASSWORD=your_password
      ```

 4. **Run Migrations and Seeders**:
    ```bash
    php artisan migrate
    php artisan db:seed --class=LandRecordSeeder
    ```

 5. **Install DomPDF**:
    ```bash
    composer require barryvdh/laravel-dompdf
    php artisan vendor:publish --provider="Barryvdh\Dompdf\ServiceProvider"
    ```

 6. **Start the Server**:
    ```bash
    php artisan serve
    ```

 7. **Test the API**:
    - Endpoint: `POST /api/land-records/search`
    - Payload: `{"search": "PARCEL001"}`
    - Example:
      ```bash
      curl -X POST https://land-record-api.ddev.site:8443/api/land-records/search \
           -H "Content-Type: application/json" \
           -d '{"search":"PARCEL001"}'
      ```

 ## Database Seeding
 - The project includes a `LandRecordFactory` that generates 100 fake land records with Indian names, addresses, and area details (100–2000 sqm).
 - Run `php artisan db:seed --class=LandRecordSeeder` to populate the `land_records` table.

 ## Approach
 - **Framework**: Laravel 12 with MySQL as the database (substitute for Apache Doris due to its MySQL compatibility).
 - **Search Logic**: The API accepts a search input and queries the `land_records` table for matches in `parcel_id`, `plot_number`, or `owner_name`.
 - **PDF Generation**: Uses `barryvdh/laravel-dompdf` to generate a PDF from a Blade template, displaying results in a table.
 - **Response**: Returns the generated PDF as a downloadable file.
 - **Database**: A simple `land_records` table with fields for parcel ID, plot number, owner name, address, area, and status.
 - **Error Handling**: Validates input and returns a 404 response if no records are found.

 ## Sample PDF
 A sample PDF output is included in the repository as `sample_land_record_summary.pdf`.
 [land_record_summary.pdf](https://github.com/user-attachments/files/20430683/land_record_summary.pdf)


 ## Notes
 - The project uses MySQL instead of Apache Doris for simplicity.
 - The PDF template is styled for clarity and readability.
 - Sample data is seeded with 100 fake records for testing purposes.

