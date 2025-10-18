<x-layout.public title="{{ __('Contact') }} - ICTServe">
    {{-- Breadcrumbs (WCAG 2.2 SC 2.4.8) --}}
    <x-breadcrumbs :items="[
        ['label' => __('Contact'), 'url' => null]
    ]" />

    <div class="space-y-8">
        <!-- Page Header -->
        <div class="text-center">
            <h1 class="text-3xl font-bold text-gray-900 dark:text-white">
                {{ __('Contact ICT Support') }}
            </h1>
            <p class="mt-4 text-lg text-gray-600 dark:text-gray-400">
                {{ __('Get in touch with our ICT support team') }}
            </p>
        </div>

        {{-- Error Summary (WCAG 2.2 SC 3.3.1) --}}
        <x-error-summary :errors="$errors" />

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
            <!-- Contact Information -->
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow rounded-lg">
                <div class="px-4 py-5 sm:p-6">
                    <h2 class="text-lg font-medium text-gray-900 dark:text-white mb-4">
                        Contact Information
                    </h2>

                    <div class="space-y-4">
                        <div class="flex items-start">
                            <div class="flex-shrink-0">
                                <svg class="h-6 w-6 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                </svg>
                            </div>
                            <div class="ml-3">
                                <h3 class="text-sm font-medium text-gray-900 dark:text-white">Office Address</h3>
                                <p class="mt-1 text-sm text-gray-500 dark:text-gray-400">
                                    Kementerian Pelancongan, Seni dan Budaya Malaysia<br>
                                    Tingkat 13-27, No. 2, Menara 1,<br>
                                    Jalan P5/6, Presint 5,<br>
                                    62200 W.P. Putrajaya
                                </p>
                            </div>
                        </div>

                        <div class="flex items-start">
                            <div class="flex-shrink-0">
                                <svg class="h-6 w-6 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                                </svg>
                            </div>
                            <div class="ml-3">
                                <h3 class="text-sm font-medium text-gray-900 dark:text-white">Phone</h3>
                                <p class="mt-1 text-sm text-gray-500 dark:text-gray-400">
                                    +603-8000 8000 (General)<br>
                                    +603-8000 8888 (ICT Support)
                                </p>
                            </div>
                        </div>

                        <div class="flex items-start">
                            <div class="flex-shrink-0">
                                <svg class="h-6 w-6 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                </svg>
                            </div>
                            <div class="ml-3">
                                <h3 class="text-sm font-medium text-gray-900 dark:text-white">Email</h3>
                                <p class="mt-1 text-sm text-gray-500 dark:text-gray-400">
                                    ict-support@motac.gov.my<br>
                                    info@motac.gov.my
                                </p>
                            </div>
                        </div>

                        <div class="flex items-start">
                            <div class="flex-shrink-0">
                                <svg class="h-6 w-6 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </div>
                            <div class="ml-3">
                                <h3 class="text-sm font-medium text-gray-900 dark:text-white">Support Hours</h3>
                                <p class="mt-1 text-sm text-gray-500 dark:text-gray-400">
                                    Monday - Friday: 8:00 AM - 5:00 PM<br>
                                    Saturday - Sunday: Closed<br>
                                    Emergency Support: 24/7
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Quick Contact Form -->
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow rounded-lg">
                <div class="px-4 py-5 sm:p-6">
                    <h2 class="text-lg font-medium text-gray-900 dark:text-white mb-4">
                        Quick Contact Form
                    </h2>

                    <form class="space-y-4" method="POST" action="/contact" novalidate>
                        @csrf
                        <div class="form-group">
                            <label for="name" class="form-label">
                                Full Name <span class="text-red-500" aria-label="required">*</span>
                            </label>
                            <input type="text"
                                   name="name"
                                   id="name"
                                   required
                                   autocomplete="name"
                                   placeholder="Enter your full name"
                                   minlength="2"
                                   maxlength="100"
                                   class="form-input"
                                   aria-required="true"
                                   aria-describedby="name-help">
                            <p id="name-help" class="text-xs text-gray-500 mt-1">Please enter your full name as per official documents</p>
                        </div>

                        <div class="form-group">
                            <label for="email" class="form-label">
                                Email Address <span class="text-red-500" aria-label="required">*</span>
                            </label>
                            <input type="email"
                                   name="email"
                                   id="email"
                                   required
                                   autocomplete="email"
                                   placeholder="your.email@motac.gov.my"
                                   class="form-input"
                                   aria-required="true"
                                   aria-describedby="email-help">
                            <p id="email-help" class="text-xs text-gray-500 mt-1">Use your official MOTAC email address</p>
                        </div>

                        <div class="form-group">
                            <label for="department" class="form-label">
                                Department <span class="text-red-500" aria-label="required">*</span>
                            </label>
                            <select name="department"
                                    id="department"
                                    required
                                    class="form-select"
                                    aria-required="true">
                                <option value="">Select Department</option>
                                <option value="administration">Administration</option>
                                <option value="finance">Finance</option>
                                <option value="human-resources">Human Resources</option>
                                <option value="tourism">Tourism Development</option>
                                <option value="arts-culture">Arts & Culture</option>
                                <option value="ict">ICT Department</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="priority" class="form-label">
                                Priority Level <span class="text-red-500" aria-label="required">*</span>
                            </label>
                            <select name="priority"
                                    id="priority"
                                    required
                                    class="form-select"
                                    aria-required="true"
                                    aria-describedby="priority-help">
                                <option value="">Select Priority</option>
                                <option value="low">Low - General inquiry or information</option>
                                <option value="medium">Medium - Non-urgent issue requiring attention</option>
                                <option value="high">High - Urgent issue affecting work</option>
                                <option value="urgent">Urgent - Critical system outage</option>
                            </select>
                            <p id="priority-help" class="text-xs text-gray-500 mt-1">Select the appropriate priority level for your request</p>
                        </div>

                        <div class="form-group">
                            <label for="subject" class="form-label">
                                Subject <span class="text-red-500" aria-label="required">*</span>
                            </label>
                            <input type="text"
                                   name="subject"
                                   id="subject"
                                   required
                                   placeholder="Brief description of your request"
                                   minlength="5"
                                   maxlength="200"
                                   class="form-input"
                                   aria-required="true">
                        </div>

                        <div class="form-group">
                            <label for="message" class="form-label">
                                Message <span class="text-red-500" aria-label="required">*</span>
                            </label>
                            <textarea name="message"
                                      id="message"
                                      rows="4"
                                      required
                                      minlength="10"
                                      maxlength="1000"
                                      class="form-textarea"
                                      placeholder="Please describe your request or issue in detail..."
                                      aria-required="true"
                                      aria-describedby="message-help"></textarea>
                            <p id="message-help" class="text-xs text-gray-500 mt-1">
                                <span id="char-count">0</span>/1000 characters
                            </p>
                        </div>

                        <div>
                            <button type="submit"
                                    class="btn-primary w-full">
                                <svg class="w-5 h-5 mr-2 inline" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                </svg>
                                Send Message
                            </button>
                        </div>
                    </form>

                    <script>
                        // Character counter for message field
                        document.addEventListener('DOMContentLoaded', function() {
                            const messageField = document.getElementById('message');
                            const charCount = document.getElementById('char-count');

                            if (messageField && charCount) {
                                messageField.addEventListener('input', function() {
                                    charCount.textContent = this.value.length;

                                    // Visual feedback for character limit
                                    if (this.value.length > 900) {
                                        charCount.classList.add('text-yellow-600', 'font-bold');
                                    } else {
                                        charCount.classList.remove('text-yellow-600', 'font-bold');
                                    }
                                });
                            }
                        });
                    </script>
                </div>
            </div>
        </div>

        <!-- Emergency Contact -->
        <div class="bg-red-50 dark:bg-red-900 border border-red-200 dark:border-red-700 rounded-lg p-6">
            <div class="flex">
                <div class="flex-shrink-0">
                    <svg class="h-5 w-5 text-red-400" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z" clip-rule="evenodd" />
                    </svg>
                </div>
                <div class="ml-3">
                    <h3 class="text-sm font-medium text-red-800 dark:text-red-200">
                        Emergency ICT Support
                    </h3>
                    <div class="mt-2 text-sm text-red-700 dark:text-red-300">
                        <p>
                            For critical system outages or security incidents that affect ministry operations,
                            contact our 24/7 emergency support hotline: <strong>+603-8000-9999</strong>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout.public>
