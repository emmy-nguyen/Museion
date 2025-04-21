# B TIER

## Access Rules

-   **Home page**: No login required
-   **View all artworks and artwork details**: No login required
-   **Create artwork**: Requires login

## File Upload Configuration

To support image uploads, please update your `php.ini` file:

```ini
upload_max_filesize = 10M
post_max_size = 12M
```

I set up MINIO because I need it for a creation feature and I added MINIO setup in .env example.

## Seeding Instruction

Before seeding, please create database 'museion'

```
php artisan tinker

use App\Models\User;
use App\Models\Category;
use App\Models\Artwork;
use App\Models\ArtworkImage;

ArtworkImage::factory()->count(15)->create();
```

## Note:

I was not able to complete the A Tier section of the assignment.
If possible, could you please share a sample solution or guide after grading? I'd love to learn how to approach it properly.
