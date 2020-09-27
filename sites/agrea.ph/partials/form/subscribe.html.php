<form method="post" action="<?= route('newsletter') ?>" class="bg-white shadow-md rounded px-8 pt-6 pb-8 ml-auto mr-auto">
	<div class="grid md:grid-cols-2 gap-4 mb-4">
		<div class="mb-6 md:mb-0">
			<label class="block text-gray-700 text-sm font-bold mb-2" for="grid-first-name">
			First Name
			</label>
			<input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="grid-first-name" type="text" placeholder="Jane" name="firstName">
		</div>
		<div class="mb-6 md:mb-0">
			<label class="block text-gray-700 text-sm font-bold mb-2" for="grid-last-name">
			Last Name
			</label>
			<input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="grid-last-name" type="text" placeholder="Doe" name="lastName">
		</div>
	</div>

	<?= helper('form.honeypot', 'firstName_a6c1bd21'); ?>

	<div class="mb-6">
		<label class="block text-gray-700 text-sm font-bold mb-2" for="email">
			Email Address
		</label>
		<input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="email" type="email" placeholder="hello@example.ph" value="" name="email">
	</div>
	<div class="flex items-center justify-between">
		<button class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
			Sign Up!
		</button>
	</div>
</form>
