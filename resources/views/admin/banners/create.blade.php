<x-app-layout>
    <div class="app-title">
        <div>
            <h1><i class="bi bi-airplane-engines"></i> Tabel Banner - Saffwah Tour Travel</h1>
            <p>Discover the world with Saffwah Tour Travel. Affordable trips and personalized services for unforgettable journeys.</p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item"><i class="bi bi-house-door fs-6"></i></li>
            <li class="breadcrumb-item"><a href="#">Banner</a></li>
        </ul>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <h3 class="tile-title">Add Banner</h3>
                <div class="tile-body">
                    <form method="POST" action="{{ route('panel2055.banners.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">Title</label>
                            <input class="form-control" type="text" name="title" placeholder="Enter title">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Image</label>
                            <input class="form-control" type="file" name="image">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Description</label>
                            <textarea class="form-control" name="description" rows="4" placeholder="Enter description"></textarea>
                        </div>
                        <div class="mb-3">
                            <label class="form-check-label" for="is_active">Active</label>
        <input class="form-check-input" type="checkbox" name="is_active" id="is_active" value="1">
                        </div>
                        <button class="btn btn-primary" type="submit">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
