<x-frontend-layout title="Contact Us - AJ Smash Burgers">
    <section class="pt-32 pb-20 px-4 container mx-auto max-w-6xl">
        <div class="text-center mb-16">
            <h1 class="font-heading text-primary text-5xl md:text-7xl uppercase mb-4">Contact Us</h1>
            <p class="text-gray-400 tracking-widest uppercase font-bold text-sm">We'd love to hear from you</p>
            <div class="w-24 h-1 bg-primary mx-auto rounded-full mt-6"></div>
        </div>

        <div class="flex flex-col lg:flex-row gap-0 bg-tertiary border border-gray-800 rounded-[2.5rem] shadow-2xl overflow-hidden">

            <div class="w-full lg:w-2/5 bg-black/40 p-10 md:p-14 text-white flex flex-col justify-center relative">
                <h2 class="font-heading text-4xl text-primary uppercase mb-10">Get In Touch</h2>

                <div class="space-y-8">
                    <div class="flex items-start group">
                        <div class="bg-primary/10 p-3 rounded-xl mr-5 text-primary group-hover:bg-primary group-hover:text-tertiary transition duration-300">
                            <x-heroicon-s-map-pin class="w-6 h-6 shrink-0" />
                        </div>
                        <div class="pt-1">
                            <p class="font-bold text-white uppercase text-sm mb-1">Location</p>
                            <p class="font-medium text-sm leading-relaxed text-gray-400">{{ $company->address_main ?? 'Bali, Indonesia' }}</p>
                        </div>
                    </div>

                    <div class="flex items-start group">
                        <div class="bg-primary/10 p-3 rounded-xl mr-5 text-primary group-hover:bg-primary group-hover:text-tertiary transition duration-300">
                            <x-heroicon-s-phone class="w-6 h-6 shrink-0" />
                        </div>
                        <div class="pt-1">
                            <p class="font-bold text-white uppercase text-sm mb-1">Phone</p>
                            <p class="font-medium text-sm text-gray-400">{{ $company->phone_main ?? '+62' }}</p>
                        </div>
                    </div>

                    <div class="flex items-start group">
                        <div class="bg-primary/10 p-3 rounded-xl mr-5 text-primary group-hover:bg-primary group-hover:text-tertiary transition duration-300">
                            <x-heroicon-s-envelope class="w-6 h-6 shrink-0" />
                        </div>
                        <div class="pt-1">
                            <p class="font-bold text-white uppercase text-sm mb-1">Email</p>
                            <p class="font-medium text-sm text-gray-400">{{ $company->email_main ?? 'info@ajsmash.com' }}</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="w-full lg:w-3/5 p-10 md:p-14">
                @if(session('success'))
                <div class="bg-green-500/10 border border-green-500 text-green-500 p-5 mb-8 rounded-2xl flex items-center">
                    <x-heroicon-s-check-circle class="w-6 h-6 mr-3" />
                    <p class="font-bold">{{ session('success') }}</p>
                </div>
                @endif

                <form action="{{ route('message') }}" method="POST" class="space-y-6">
                    @csrf
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-xs font-bold text-gray-400 mb-2 uppercase tracking-wider">Your Name</label>
                            <input type="text" name="name" required class="w-full px-5 py-4 rounded-xl border-gray-700 bg-black/50 text-white placeholder-gray-600 focus:border-primary focus:ring-1 focus:ring-primary transition" placeholder="John Doe">
                        </div>
                        <div>
                            <label class="block text-xs font-bold text-gray-400 mb-2 uppercase tracking-wider">Email Address</label>
                            <input type="email" name="email" required class="w-full px-5 py-4 rounded-xl border-gray-700 bg-black/50 text-white placeholder-gray-600 focus:border-primary focus:ring-1 focus:ring-primary transition" placeholder="john@example.com">
                        </div>
                    </div>

                    <div>
                        <label class="block text-xs font-bold text-gray-400 mb-2 uppercase tracking-wider">Subject</label>
                        <input type="text" name="subject" class="w-full px-5 py-4 rounded-xl border-gray-700 bg-black/50 text-white placeholder-gray-600 focus:border-primary focus:ring-1 focus:ring-primary transition" placeholder="How can we help?">
                    </div>

                    <div>
                        <label class="block text-xs font-bold text-gray-400 mb-2 uppercase tracking-wider">Message</label>
                        <textarea name="message" rows="5" required class="w-full px-5 py-4 rounded-xl border-gray-700 bg-black/50 text-white placeholder-gray-600 focus:border-primary focus:ring-1 focus:ring-primary transition resize-none" placeholder="Write your message here..."></textarea>
                    </div>

                    <button type="submit" class="w-full bg-primary hover:bg-white text-tertiary font-bold py-4 px-8 rounded-xl transition duration-300 shadow-lg uppercase tracking-widest mt-4">
                        Send Message
                    </button>
                </form>
            </div>

        </div>
    </section>
</x-frontend-layout>