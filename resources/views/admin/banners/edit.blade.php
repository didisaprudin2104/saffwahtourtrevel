<x-app-layout>
    <div class="app-title">
        <div>
            <h1><i class="bi bi-airplane-engines"></i> Edit Banner - Saffwah Tour Travel</h1>
            <p>Update the banner details for Saffwah Tour Travel.</p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item"><i class="bi bi-house-door fs-6"></i></li>
            <li class="breadcrumb-item"><a href="#">Banner</a></li>
            <li class="breadcrumb-item active" aria-current="page">Edit</li>
        </ul>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <h3 class="tile-title">Edit Banner</h3>
                <div class="tile-body">
                    <form method="POST" action="{{ route('panel2055.banners.update', $banner->id) }}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT') <!-- For PUT request -->
                        
                        <!-- Title Input -->
                        <div class="mb-3">
                            <label class="form-label">Title</label>
                            <input class="form-control" type="text" name="title" value="{{ old('title', $banner->title) }}" placeholder="Enter title">
                        </div>

                        <!-- Image Input -->
                        <div class="mb-3">
                            <label class="form-label">Image</label>
                            <input class="form-control" type="file" name="image">
                           @if ($banner->image)
                                <div class="mb-2">
                                    <img src="{{ asset($banner->image) }}" alt="Banner Image" class="img-thumbnail" width="150">
                                </div>
                            @endif
                        </div>

                        <!-- Description Input -->
                        <div class="mb-3">
                            <label class="form-label">Description</label>
                            <textarea class="form-control" name="description" id="description" rows="4" placeholder="Enter description">{{ old('description', $banner->description) }}</textarea>
                        </div>
                        <!-- Active Checkbox -->
                        <div class="mb-3">
                            <label class="form-check-label" for="is_active">Active</label>
                            <input class="form-check-input" type="checkbox" name="is_active" id="is_active" value="1" {{ $banner->is_active ? 'checked' : '' }}>
                        </div>

                        <!-- Submit Button -->
                        <button class="btn btn-primary" type="submit">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.tiny.cloud/1/gdwactny6stknjckzytt0r1sn757exssk0p8wrx3gr2hn2n3/tinymce/7/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
        tinymce.init({
          selector: 'textarea',
          plugins: [
            // Core editing features
            'anchor', 'autolink', 'charmap', 'codesample', 'emoticons', 'image', 'link', 'lists', 'media', 'searchreplace', 'table', 'visualblocks', 'wordcount',
            // Your account includes a free trial of TinyMCE premium features
            // Try the most popular premium features until Feb 6, 2025:
            'checklist', 'mediaembed', 'casechange', 'export', 'formatpainter', 'pageembed', 'a11ychecker', 'tinymcespellchecker', 'permanentpen', 'powerpaste', 'advtable', 'advcode', 'editimage', 'advtemplate', 'ai', 'mentions', 'tinycomments', 'tableofcontents', 'footnotes', 'mergetags', 'autocorrect', 'typography', 'inlinecss', 'markdown','importword', 'exportword', 'exportpdf'
          ],
          toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table mergetags | addcomment showcomments | spellcheckdialog a11ycheck typography | align lineheight | checklist numlist bullist indent outdent | emoticons charmap | removeformat',
          tinycomments_mode: 'embedded',
          tinycomments_author: 'Author name',
          mergetags_list: [
            { value: 'First.Name', title: 'First Name' },
            { value: 'Email', title: 'Email' },
          ],
          ai_request: (request, respondWith) => respondWith.string(() => Promise.reject('See docs to implement AI Assistant')),
        });
      </script>
</x-app-layout>
