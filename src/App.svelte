<script lang="ts">
  import profilePic from "./assets/rahul-godiyal.jpg";

  const currentYear: number = new Date().getFullYear();
  const years_of_experience: number = currentYear - 2018;
</script>

<main>
  <!-- Header / Hero Section -->
  <header
    class="min-h-screen flex items-center justify-center bg-gradient-to-r from-gray-800 to-black"
  >
    <div class="text-center space-y-5">
      <!-- Profile Picture -->
      <img
        src={profilePic}
        alt="Rahul Godiyal"
        class="w-40 h-40 mx-auto rounded-full border-4 border-green-500 object-cover"
      />

      <!-- Intro Text -->
      <h1 class="text-5xl font-bold">
        Hi, I'm <span class="text-green-400">Rahul Godiyal</span>
      </h1>
      <p class="text-xl">
        Full Stack Developer | {years_of_experience}+ Years of Experience
      </p>
      <p class="text-gray-400">
        PHP, Laravel, React JS, Next.js, MySQL, MSSQL, Node.js
      </p>

      <!-- Contact Button -->
      <div>
        <a
          href="#contact"
          class="bg-green-500 hover:bg-green-600 px-6 py-3 rounded-full text-lg"
        >
          Contact Me
        </a>
      </div>
    </div>
  </header>

  <!-- About Section -->
  <section id="about" class="py-16 px-6">
    <div class="max-w-4xl mx-auto text-center">
      <h2 class="text-4xl font-semibold mb-4">About Me</h2>
      <p class="text-gray-400 leading-relaxed">
        I am a passionate Full Stack Developer with over {years_of_experience}+
        years of experience in building web applications. I specialize in
        backend technologies like PHP and Laravel, and have proficiency with
        modern frontend tools such as React and Next.js. Whether building
        complex REST APIs or crafting interactive user interfaces, I enjoy
        tackling all challenges related to software development.
      </p>
    </div>
  </section>

  <!-- Skills Section -->
  <section id="skills" class="py-16 bg-gray-800">
    <div class="max-w-6xl mx-auto px-6">
      <h2 class="text-4xl font-semibold text-center mb-8">Skills</h2>
      <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
        <div class="bg-gray-700 p-6 rounded-lg text-center">
          <h3 class="text-xl font-bold">PHP</h3>
        </div>
        <div class="bg-gray-700 p-6 rounded-lg text-center">
          <h3 class="text-xl font-bold">Laravel</h3>
        </div>
        <div class="bg-gray-700 p-6 rounded-lg text-center">
          <h3 class="text-xl font-bold">React JS</h3>
        </div>
        <div class="bg-gray-700 p-6 rounded-lg text-center">
          <h3 class="text-xl font-bold">Next.js</h3>
        </div>
        <div class="bg-gray-700 p-6 rounded-lg text-center">
          <h3 class="text-xl font-bold">MySQL</h3>
        </div>
        <div class="bg-gray-700 p-6 rounded-lg text-center">
          <h3 class="text-xl font-bold">MSSQL</h3>
        </div>
        <div class="bg-gray-700 p-6 rounded-lg text-center">
          <h3 class="text-xl font-bold">Node.js</h3>
        </div>
      </div>
    </div>
  </section>

  <!-- Portfolio Section -->
  <!-- <section id="portfolio" class="py-16 px-6">
    <div class="max-w-6xl mx-auto">
      <h2 class="text-4xl font-semibold text-center mb-8">Portfolio</h2>
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        <div class="bg-gray-700 p-4 rounded-lg">
          <img
            src="https://via.placeholder.com/400"
            alt="Project 1"
            class="rounded-md mb-4"
          />
          <h3 class="text-xl font-bold">Project 1</h3>
          <p class="text-gray-400">
            A Laravel-based e-commerce platform with custom admin dashboard.
          </p>
        </div>
        <div class="bg-gray-700 p-4 rounded-lg">
          <img
            src="https://via.placeholder.com/400"
            alt="Project 2"
            class="rounded-md mb-4"
          />
          <h3 class="text-xl font-bold">Project 2</h3>
          <p class="text-gray-400">
            A React.js-based social media app with real-time chat and
            notifications.
          </p>
        </div>
        <div class="bg-gray-700 p-4 rounded-lg">
          <img
            src="https://via.placeholder.com/400"
            alt="Project 3"
            class="rounded-md mb-4"
          />
          <h3 class="text-xl font-bold">Project 3</h3>
          <p class="text-gray-400">
            A Next.js portfolio website for freelancers.
          </p>
        </div>
      </div>
    </div>
  </section> -->

  <!-- Experience Section -->
  <section id="experience" class="py-16 px-6">
    <div class="max-w-6xl mx-auto">
      <h2 class="text-4xl font-semibold text-center mb-8">Experience</h2>
      <div class="space-y-6">
        <div class="bg-gray-700 p-6 rounded-lg">
          <h3 class="text-2xl font-bold">Senior PHP Developer - Bamko</h3>
          <p class="text-gray-400">Feb 2021 - Present</p>
          <p>
            Collaborated with cross-functional teams to develop, test, and
            deploy web applications, ensuring optimal performance and user
            experience.
          </p>
        </div>
        <div class="bg-gray-700 p-6 rounded-lg">
          <h3 class="text-2xl font-bold">Web Developer - Artisans Soft</h3>
          <p class="text-gray-400">Nov 2018 - Feb 2021</p>
          <p>
            Developed custom modules and plugins for content management systems
            using Laravel and CodeIgniter frameworks.
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- Contact Section -->
  <section id="contact" class="py-16 px-6">
    <div class="max-w-4xl mx-auto text-center">
      <h2 class="text-4xl font-semibold mb-4">Get in Touch</h2>
      <p class="text-gray-400 mb-6">
        Feel free to reach out if you are interested in working with me or just
        want to say hi!
      </p>
      <form class="space-y-4">
        <input
          type="text"
          placeholder="Your Name"
          class="w-full px-4 py-2 rounded-lg bg-gray-800 border border-gray-700 focus:outline-none"
        />
        <input
          type="email"
          placeholder="Your Email"
          class="w-full px-4 py-2 rounded-lg bg-gray-800 border border-gray-700 focus:outline-none"
        />
        <textarea
          placeholder="Your Message"
          rows="4"
          class="w-full px-4 py-2 rounded-lg bg-gray-800 border border-gray-700 focus:outline-none"
        ></textarea>
        <button
          type="submit"
          class="w-full bg-green-500 hover:bg-green-600 px-4 py-2 rounded-lg"
          >Send Message</button
        >
      </form>
    </div>
  </section>

  <!-- Footer -->
  <footer class="py-6 text-center bg-gray-800">
    <p>&copy; {currentYear} Rahul Godiyal. All Rights Reserved.</p>
  </footer>
</main>
