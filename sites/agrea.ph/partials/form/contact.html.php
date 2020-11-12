<form method="post" action="<?= route('about/contact') ?>" class="text-gray-900">
	<fieldset class="mb-4">
		<div class="question">
			<label class="block">Name<sup>*</sup></label>
			<div class="grid sm:grid-cols-2">
				<input class="sm:mr-2 bg-gray-100 rounded mb-2 border border-gray-400 focus:outline-none focus:bg-white focus:shadow-outline py-2 px-4" placeholder="First Name" type="text" name="firstName" required>
				<input class="bg-gray-100 rounded mb-2 border border-gray-400 focus:outline-none focus:bg-white focus:shadow-outline py-2 px-4" placeholder="Last Name" type="text" name="lastName" required>
			</div>
		</div>
		<?= helper('form.honeypot', page('about/contact')->form->honeypot); ?>
		<div class="question">
			<label for="email" class="block">Email Address<sup>*</sup></label>
			<input class="w-full bg-gray-100 rounded mb-2 border border-gray-400 focus:outline-none focus:bg-white focus:shadow-outline py-2 px-4" placeholder="Email Address" type="email" name="email" required>
		</div>
	</fieldset>
	<fieldset class="">
		<div class="question">
			<label for="message">Message</label>
			<textarea name="message" rows="5" cols="15" class="w-full bg-gray-100 rounded mb-2 border border-gray-400 focus:outline-none focus:bg-white focus:shadow-outline py-2 px-4"></textarea>
		</div>
	</fieldset>
	<div class="submit">
		<button class="lg:mt-2 xl:mt-0 flex-shrink-0 inline-flex text-white bg-brand border-0 py-2 px-6 focus:outline-none hover:bg-green-600 rounded" type="submit">Submit</button>
	</div>
</form>
