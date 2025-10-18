@props(['errors'])

@if($errors->any())
<div role="alert"
     aria-labelledby="error-summary-title"
     class="bg-red-50 dark:bg-red-900 border-l-4 border-red-500 p-6 mb-6 rounded-lg shadow-sm"
     tabindex="-1"
     id="error-summary">
    {{-- Error Summary Header --}}
    <div class="flex items-start">
        <div class="flex-shrink-0">
            <svg class="h-6 w-6 text-red-500 dark:text-red-400"
                 fill="none"
                 stroke="currentColor"
                 viewBox="0 0 24 24"
                 aria-hidden="true">
                <path stroke-linecap="round"
                      stroke-linejoin="round"
                      stroke-width="2"
                      d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-2.5L13.732 4c-.77-.833-1.964-.833-2.732 0L4.082 16.5c-.77.833.192 2.5 1.732 2.5z"></path>
            </svg>
        </div>

        <div class="ml-4 flex-1">
            <h2 id="error-summary-title" class="text-lg font-semibold text-red-800 dark:text-red-200 mb-2">
                {{ __('There were :count errors with your submission', ['count' => $errors->count()]) }}
            </h2>

            <p class="text-sm text-red-700 dark:text-red-300 mb-4">
                {{ __('Please review the following issues and try again:') }}
            </p>

            {{-- Error List with Links to Fields --}}
            <ul class="space-y-2" role="list">
                @foreach($errors->all() as $error)
                    <li class="text-sm text-red-700 dark:text-red-300 flex items-start">
                        <svg class="h-4 w-4 mr-2 mt-0.5 flex-shrink-0"
                             fill="currentColor"
                             viewBox="0 0 20 20"
                             aria-hidden="true">
                            <path fill-rule="evenodd"
                                  d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z"
                                  clip-rule="evenodd"></path>
                        </svg>
                        <span>{{ $error }}</span>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>

{{-- JavaScript to focus error summary on page load --}}
@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const errorSummary = document.getElementById('error-summary');
        if (errorSummary) {
            errorSummary.focus();
            errorSummary.scrollIntoView({ behavior: 'smooth', block: 'center' });
        }
    });
</script>
@endpush
@endif
