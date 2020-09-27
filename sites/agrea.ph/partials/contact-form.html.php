<form method="post" action="<?= route('contact') ?>" class="text-gray-900">
	<fieldset class="mb-4">
		<div class="question">
			<label class="block">Name<sup>*</sup></label>
			<div class="grid grid-cols-2">
				<input class="sm:mr-2 bg-gray-100 rounded mb-2 border border-gray-400 focus:outline-none focus:border-green-500 py-2 px-4" placeholder="First Name" type="text" name="firstName">
				<input class="bg-gray-100 rounded mb-2 border border-gray-400 focus:outline-none focus:border-green-500 py-2 px-4" placeholder="Last Name" type="text" name="lastName">
			</div>
		</div>
		<?= helper('form.honeypot', 'firstName_a6c1bd21'); ?>
		<div class="question">
			<label for="email" class="block">Email Address<sup>*</sup></label>
			<input class="w-auto sm:w-full bg-gray-100 rounded mb-2 border border-gray-400 focus:outline-none focus:border-green-500 py-2 px-4" placeholder="Email Address" type="text" name="email">
		</div>
	</fieldset>
	<fieldset class="">
		<div class="question">
			<label for="message">Message</label>
			<textarea name="message" rows="5" cols="15" class="sm:w-full bg-gray-100 rounded mb-2 border border-gray-400 focus:outline-none focus:border-green-500 py-2 px-4"></textarea>
		</div>
	</fieldset>
	<div class="submit">
		<button class="lg:mt-2 xl:mt-0 flex-shrink-0 inline-flex text-white bg-green-500 border-0 py-2 px-6 focus:outline-none hover:bg-green-600 rounded" type="submit">Submit</button>
	</div>
</form>