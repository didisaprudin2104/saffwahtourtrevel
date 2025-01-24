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
                <div class="tile-body">
                    <!-- Add Data Button -->
                    <div class="mb-3">
                        <a href="{{ route('panel2055.banners.create') }}" class="btn btn-primary">
                            <i class="bi bi-plus-circle"></i> Add Data
                        </a>
                    </div>

                    <!-- Table -->
                    <div class="table-responsive">
                        <table class="table table-hover table-bordered" id="sampleTable">
                            <thead>
                                <tr>
                                    <th>no</th>
                                    <th>Titel</th>
                                    <th>Image</th>
                                    <th>Description</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- Example Data, replace with actual data -->
                                @foreach($banners as $index => $banner)
                                <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <td>{{ $banner->title }}</td>
                                    <td>
                                        <img src="{{ asset( $banner->image) }}" alt="Banner Image" style="width: 80px; height: auto;">
                                    </td>
                                    <td style="white-space: pre-wrap; word-wrap: break-word;">
                                        {{ $banner->description }}
                                    </td>
                                    <td>@if ($banner->is_active) Active @else Inactive @endif</td>
                                    <td>
                                        <!-- Edit Button with Icon (Inline) -->
                                        <a href="{{ route('panel2055.banners.edit', $banner->id) }}" class="btn btn-warning btn-sm d-inline-block">
                                            <i class="bi bi-pencil"></i>
                                        </a>
                                    
                                        <!-- Delete Button with Icon (Inline) -->
                                        <form action="{{ route('panel2055.banners.destroy', $banner->id) }}" method="POST" style="display:inline-block;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this?')">
                                                <i class="bi bi-trash"></i> 
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                                <!-- Repeat for other data -->
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
