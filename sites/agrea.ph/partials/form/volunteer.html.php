<form method="post" action="<?= route('programs/volunteer') ?>" class="text-gray-900 mb-8">
  <fieldset class="mb-4">
    <div class="question">
      <label class="block">Name<sup>*</sup></label>
      <div class="grid grid-cols-2">
        <input class="sm:mr-2 bg-gray-100 rounded mb-2 border border-gray-400 focus:outline-none focus:border-green-500 py-2 px-4" placeholder="First Name" type="text" name="firstName">
        <input class="bg-gray-100 rounded mb-2 border border-gray-400 focus:outline-none focus:border-green-500 py-2 px-4" placeholder="Last Name" type="text" name="lastName">
      </div>
    </div>
    <?= helper('form.honeypot', page('programs/volunteer')->form->honeypot); ?>
    <div class="question">
      <label for="email" class="block">Email Address<sup>*</sup></label>
      <input class="w-auto sm:w-full bg-gray-100 rounded mb-2 border border-gray-400 focus:outline-none focus:border-green-500 py-2 px-4" placeholder="Email Address" type="text" name="email">
    </div>
  </fieldset>
  <div class="grid sm:grid-cols-2">
    <fieldset class="mb-4">
      <h4 role="heading" aria-level="4" class="text-sm text-gray-900 dark:text-gray-100 font-medium font-title uppercase my-4 leading-tight">Choose as many volunteer sectors that apply to you<sup>*</sup></h4>

      <div class="question">
        <div>
          <div class="relative inline-block w-10 mr-2 align-middle select-none transition duration-200 ease-in">
            <input type="checkbox" name="sectors[]" value="Male Youth (13 to 35 years old)" id="male" class="toggle-checkbox absolute block w-6 h-6 rounded-full bg-white border-4 appearance-none cursor-pointer"/>
            <label for="male" class="toggle-label block overflow-hidden h-6 rounded-full bg-gray-300 cursor-pointer"></label>
          </div>
          <label for="male" class="text-sm">Male Youth (13 to 35 years old)</label>
        </div>
        <div>
          <div class="relative inline-block w-10 mr-2 align-middle select-none transition duration-200 ease-in">
            <input type="checkbox" name="sectors[]" value="Female Youth (13 to 35 years old)" id="female" class="toggle-checkbox absolute block w-6 h-6 rounded-full bg-white border-4 appearance-none cursor-pointer"/>
            <label for="female" class="toggle-label block overflow-hidden h-6 rounded-full bg-gray-300 cursor-pointer"></label>
          </div>
          <label for="female" class="text-sm">Female Youth (13 to 35 years old)</label>
        </div>
        <div>
          <div class="relative inline-block w-10 mr-2 align-middle select-none transition duration-200 ease-in">
            <input type="checkbox" name="sectors[]" value="Mother" id="mother" class="toggle-checkbox absolute block w-6 h-6 rounded-full bg-white border-4 appearance-none cursor-pointer"/>
            <label for="mother" class="toggle-label block overflow-hidden h-6 rounded-full bg-gray-300 cursor-pointer"></label>
          </div>
          <label for="mother" class="text-sm">Mother</label>
        </div>
        <div>
          <div class="relative inline-block w-10 mr-2 align-middle select-none transition duration-200 ease-in">
            <input type="checkbox" name="sectors[]" value="Farmer Leader" id="farmer-leader" class="toggle-checkbox absolute block w-6 h-6 rounded-full bg-white border-4 appearance-none cursor-pointer"/>
            <label for="farmer-leader" class="toggle-label block overflow-hidden h-6 rounded-full bg-gray-300 cursor-pointer"></label>
          </div>
          <label for="farmer-leader" class="text-sm">Farmer Leader</label>
        </div>
        <div>
          <div class="relative inline-block w-10 mr-2 align-middle select-none transition duration-200 ease-in">
            <input type="checkbox" name="sectors[]" value="Fisherfolk Leader" id="fisherfolk-leader" class="toggle-checkbox absolute block w-6 h-6 rounded-full bg-white border-4 appearance-none cursor-pointer"/>
            <label for="fisherfolk-leader" class="toggle-label block overflow-hidden h-6 rounded-full bg-gray-300 cursor-pointer"></label>
          </div>
          <label for="fisherfolk-leader" class="text-sm">Fisherfolk Leader</label>
        </div>
        <div>
          <div class="relative inline-block w-10 mr-2 align-middle select-none transition duration-200 ease-in">
            <input type="checkbox" name="sectors[]" value="LGBT+" id="lgbt" class="toggle-checkbox absolute block w-6 h-6 rounded-full bg-white border-4 appearance-none cursor-pointer"/>
            <label for="lgbt" class="toggle-label block overflow-hidden h-6 rounded-full bg-gray-300 cursor-pointer"></label>
          </div>
          <label for="lgbt" class="text-sm">LGBT+</label>
        </div>
        <div>
          <div class="relative inline-block w-10 mr-2 align-middle select-none transition duration-200 ease-in">
            <input type="checkbox" name="sectors" value="Teacher/Educator" id="teacher" class="toggle-checkbox absolute block w-6 h-6 rounded-full bg-white border-4 appearance-none cursor-pointer"/>
            <label for="teacher" class="toggle-label block overflow-hidden h-6 rounded-full bg-gray-300 cursor-pointer"></label>
          </div>
          <label for="teacher" class="text-sm">Teacher/Educator</label>
        </div>
        <div>
          <div class="relative inline-block w-10 mr-2 align-middle select-none transition duration-200 ease-in">
            <input type="checkbox" name="sectors[]" value="Person with Disability" id="disability" class="toggle-checkbox absolute block w-6 h-6 rounded-full bg-white border-4 appearance-none cursor-pointer"/>
            <label for="disability" class="toggle-label block overflow-hidden h-6 rounded-full bg-gray-300 cursor-pointer"></label>
          </div>
          <label for="disability" class="text-sm">Person with Disability</label>
        </div>
        <div>
          <div class="relative inline-block w-10 mr-2 align-middle select-none transition duration-200 ease-in">
            <input type="checkbox" name="sectors[]" value="Senior Citizen" id="senior" class="toggle-checkbox absolute block w-6 h-6 rounded-full bg-white border-4 appearance-none cursor-pointer"/>
            <label for="senior" class="toggle-label block overflow-hidden h-6 rounded-full bg-gray-300 cursor-pointer"></label>
          </div>
          <label for="senior" class="text-sm">Senior Citizen</label>
        </div>
        <div>
          <div class="relative inline-block w-10 mr-2 align-middle select-none transition duration-200 ease-in">
            <input type="checkbox" name="sectors[]" value="Overseas Filipino Worker" id="overseas" class="toggle-checkbox absolute block w-6 h-6 rounded-full bg-white border-4 appearance-none cursor-pointer"/>
            <label for="overseas" class="toggle-label block overflow-hidden h-6 rounded-full bg-gray-300 cursor-pointer"></label>
          </div>
          <label for="overseas" class="text-sm">Overseas Filipino Worker</label>
        </div>
      </div>
    </fieldset>
    <fieldset class="mb-4">
      <h4 role="heading" aria-level="4" class="text-sm text-gray-900 dark:text-gray-100 font-medium font-title uppercase my-4 leading-tight">Interests<sup>*</sup></h4>
      <div class="question">
        <div>
          <div class="relative inline-block w-10 mr-2 align-middle select-none transition duration-200 ease-in">
            <input type="checkbox" name="interests[]" value="Environmental protection" id="environmental" class="toggle-checkbox absolute block w-6 h-6 rounded-full bg-white border-4 appearance-none cursor-pointer"/>
            <label for="environmental" class="toggle-label block overflow-hidden h-6 rounded-full bg-gray-300 cursor-pointer"></label>
          </div>
          <label for="environmental" class="text-sm">Environmental protection</label>
        </div>
        <div>
          <div class="relative inline-block w-10 mr-2 align-middle select-none transition duration-200 ease-in">
            <input type="checkbox" name="interests[]" value="Organic farm development" id="farm-development" class="toggle-checkbox absolute block w-6 h-6 rounded-full bg-white border-4 appearance-none cursor-pointer"/>
            <label for="farm-development" class="toggle-label block overflow-hidden h-6 rounded-full bg-gray-300 cursor-pointer"></label>
          </div>
          <label for="farm-development" class="text-sm">Organic farm development</label>
        </div>
        <div>
          <div class="relative inline-block w-10 mr-2 align-middle select-none transition duration-200 ease-in">
            <input type="checkbox" name="interests[]" value="AGREA Farm School volunteer" id="volunteer" class="toggle-checkbox absolute block w-6 h-6 rounded-full bg-white border-4 appearance-none cursor-pointer"/>
            <label for="volunteer" class="toggle-label block overflow-hidden h-6 rounded-full bg-gray-300 cursor-pointer"></label>
          </div>
          <label for="volunteer" class="text-sm">AGREA Farm School volunteer</label>
        </div>
        <div>
          <div class="relative inline-block w-10 mr-2 align-middle select-none transition duration-200 ease-in">
            <input type="checkbox" name="interests[]" value="School garden development" id="garden-development" class="toggle-checkbox absolute block w-6 h-6 rounded-full bg-white border-4 appearance-none cursor-pointer"/>
            <label for="garden-development" class="toggle-label block overflow-hidden h-6 rounded-full bg-gray-300 cursor-pointer"></label>
          </div>
          <label for="garden-development" class="text-sm">School garden development</label>
        </div>
        <div>
          <div class="relative inline-block w-10 mr-2 align-middle select-none transition duration-200 ease-in">
            <input type="checkbox" name="interests[]" value="Agricultural extension program" id="extension" class="toggle-checkbox absolute block w-6 h-6 rounded-full bg-white border-4 appearance-none cursor-pointer"/>
            <label for="extension" class="toggle-label block overflow-hidden h-6 rounded-full bg-gray-300 cursor-pointer"></label>
          </div>
          <label for="extension" class="text-sm">Agricultural extension program</label>
        </div>
        <div>
          <div class="relative inline-block w-10 mr-2 align-middle select-none transition duration-200 ease-in">
            <input type="checkbox" name="interests[]" value="Youth leadership events" id="youth" class="toggle-checkbox absolute block w-6 h-6 rounded-full bg-white border-4 appearance-none cursor-pointer"/>
            <label for="youth" class="toggle-label block overflow-hidden h-6 rounded-full bg-gray-300 cursor-pointer"></label>
          </div>
          <label for="youth" class="text-sm">Youth leadership events</label>
        </div>
        <div>
          <div class="relative inline-block w-10 mr-2 align-middle select-none transition duration-200 ease-in">
            <input type="checkbox" name="interests[]" value="Program development"  id="program-development" class="toggle-checkbox absolute block w-6 h-6 rounded-full bg-white border-4 appearance-none cursor-pointer"/>
            <label for="program-development" class="toggle-label block overflow-hidden h-6 rounded-full bg-gray-300 cursor-pointer"></label>
          </div>
          <label for="program-development" class="text-sm">Program development</label>
        </div>
      </div>
    </fieldset>
  </div>
  <fieldset class="">
    <h4 role="heading" aria-level="4" class="text-sm text-gray-900 dark:text-gray-100 font-medium font-title uppercase my-4 leading-tight">Describe your volunteering and leadership experience (if any)</h4>
    <div class="question">
      <textarea name="experience" rows="5" cols="15" class="sm:w-full bg-gray-100 rounded mb-2 border border-gray-400 focus:outline-none focus:border-green-500 py-2 px-4"></textarea>
    </div>
  </fieldset>
  <div class="submit">
    <button class="lg:mt-2 xl:mt-0 flex-shrink-0 inline-flex text-white bg-brand border-0 py-2 px-6 focus:outline-none hover:bg-green-600 rounded" type="submit">Submit</button>
  </div>
</form>
