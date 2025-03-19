<x-guest-layout>
    <div class="max-w-md mx-auto mt-10">
        <h1 class="text-2xl font-bold text-center">Login</h1>
        <form action="">
            <div class="card space-y-6">
                <div>
                    <flux:heading class="text-center" size="lg">Log in to your account</flux:heading>
                    <flux:subheading class="text-center">Welcome back!</flux:subheading>
                </div>

                <div class="space-y-6">
                    <flux:input label="Username" type="text" placeholder="Your username" />

                    <flux:field>
                        <div class="mb-3 flex justify-between">
                            <flux:label>Password</flux:label>

                            <flux:link href="#" variant="subtle" class="text-sm">Forgot password?</flux:link>
                        </div>

                        <flux:input type="password" placeholder="Your password" />

                        <flux:error name="password" />
                    </flux:field>
                </div>

                <div class="space-y-2">
                    <flux:button variant="filled" class="w-full">Log in</flux:button>

                    <flux:button variant="ghost" class="w-full">Sign up for a new account</flux:button>
                </div>
            </div>
        </form>
    </div>
</x-guest-layout>
