## SOLN

This is mainly based on the development style I used three years ago. I have tried using Gutenberg with ACF, but while it is easy to build custom blocks, the problem lies with the page editor. It gives too much flexibility, making it hard for clients to edit the content. Therefore, I have decided to use the old flexible content.

Stack choice:

- ACF with flexible content
- TailwindCSS for styling
- Vite to build assets

Pros:

- Easy for clients to edit content
- Easy for clients to use their own plugins
- Easy to hand over without plugin updates

Cons:

- Longer development time compared to using Sage

Alternative development options:

- Using Twig + Timber
- Using Sage
  - I would definitely prefer the speed, but I worry about compatibility with plugin updates.

Contact form:

- Uses MC4WP to integrate Mailchimp because of its seamless integration with CF7.
- Uses Contact Form Entries because of its seamless integration with CF7.
- Normally, I wouldn't use CF7 because there are many better contact form plugins available.

RSS Feed:

- Ideally, I should have added a text field for the RSS feed URL.

Ad-hoc Troubleshooting, Bug Fixing, and Communication:

- If there is a problem or bug, the standard procedure is to raise a ticket with the incident number, priority, and steps to reproduce the issue.
- In WordPress, the first step is to enable debug mode.
- You can further diagnose the issue by switching themes or plugins to identify the source of the problem.

Technical SEO:

- I primarily use the Yoast Plugin to handle standard SEO (title, meta description, etc.), XML sitemap, as well as organization schema/structured data.
- Custom schema/structured data can also be added for sections like 'FAQ' and 'Product' to display Google rich snippets. These JSON-LD scripts are added via their respective section PHP files.

Form Tracking:

- I don't know much about advanced Google Tag Manager
