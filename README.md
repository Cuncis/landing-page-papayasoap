# Kalysa Soap — Product Landing Page

A high-converting product landing page for **Kalysa Soap**, a 100% natural papaya-based skincare soap. Built with WordPress and Elementor, designed to drive sales through persuasive copywriting, structured sections, and clear calls-to-action.

---

## Preview

![screenshot of hero section](https://karangreksa.site/wp-content/uploads/2026/04/lp-hero-banner.png)

> *Hero section with headline, product image, and primary CTA button*

---

## Table of Contents

- [About the Project](#about-the-project)
- [Page Sections](#page-sections)
- [Tech Stack](#tech-stack)
- [Project Structure](#project-structure)
- [Local Development Setup](#local-development-setup)
- [Screenshots](#screenshots)
- [What I Learned](#what-i-learned)
- [License](#license)

---

## About the Project

This landing page was built as a freelance/portfolio project to promote **Kalysa Soap Papaya** — a natural skincare product from the **Kalysa Beauty** brand. The goal was to create a single-page sales funnel that:

- Immediately communicates the product's core value proposition
- Addresses common skin problem pain points
- Builds trust through testimonials and product facts
- Drives conversions with a clear pricing section, bonuses, and a money-back guarantee

The page is developed locally using **Local WP**, designed with **Elementor**, and can be exported as a static site using the **Simply Static** plugin.

---

## Page Sections

The landing page follows a classic direct-response sales funnel structure:

| # | Section | Purpose |
|---|---------|---------|
| 1 | **Hero / Header** | Headline + product image + primary CTA |
| 2 | **Social Proof (Top)** | Two customer testimonials above the fold |
| 3 | **Pain Points** | Six common skin problems the product solves |
| 4 | **Facts About Kalysa Soap** | Four science-backed product benefits |
| 5 | **Product Introduction** | Brand story and product overview |
| 6 | **Key Benefits** | Six feature highlights with icons |
| 7 | **Who Is It For?** | Six target outcomes for the ideal customer |
| 8 | **Body Care Benefits** | Five star-listed usage benefits |
| 9 | **Customer Reviews** | WhatsApp chat screenshots as social proof |
| 10 | **Why Buy Now?** | Four urgency-driven reasons |
| 11 | **Bonus Section** | Free gifts with purchase (Shampoo + Lulur Whitening) |
| 12 | **Pricing & CTA** | Price reveal (50% off) + buy button + payment options |
| 13 | **Money-Back Guarantee** | 30-day refund assurance |
| 14 | **Consequence of Not Buying** | Six FOMO-triggering points |
| 15 | **FAQ** | Four frequently asked questions |
| 16 | **Footer** | Brand website + social media links |

---

## Tech Stack

| Technology | Role |
|------------|------|
| **WordPress 6.7** | Content Management System |
| **Elementor** | Drag-and-drop page builder |
| **Twenty Twenty-Five** | Base WordPress theme |
| **Simply Static** | Static site export plugin |
| **Local WP** | Local development environment |
| **PHP 8.2.30** | Server-side language |
| **Nginx** | Web server |
| **MySQL 8.0** | Database |

---

## Project Structure

```
landingpage-papayasoap/
├── app/
│   ├── public/                  # WordPress root
│   │   ├── wp-config.php        # WordPress configuration
│   │   ├── wp-content/
│   │   │   ├── plugins/
│   │   │   │   ├── elementor/   # Elementor page builder
│   │   │   │   └── simply-static/ # Static site exporter
│   │   │   ├── themes/
│   │   │   │   └── twentytwentyfive/ # Active theme
│   │   │   └── uploads/
│   │   │       └── 2025/01/     # All landing page assets
│   │   └── wp-admin/            # WordPress admin
│   └── sql/
│       └── local.sql            # Database export / backup
├── conf/
│   ├── mysql/                   # MySQL config
│   ├── nginx/                   # Nginx server config
│   └── php/                     # PHP-FPM config
└── logs/                        # Server logs
```

---

## Local Development Setup

### Prerequisites

- [Local WP](https://localwp.com/) installed on your machine
- Git

### Steps

1. **Clone the repository**
   ```bash
   git clone https://github.com/your-username/landingpage-papayasoap.git
   ```

2. **Import into Local WP**
   - Open Local WP
   - Click the `+` button → **Import existing site**
   - Select the project folder

3. **Import the database**
   - In Local WP, open the site's database manager (Adminer/TablePlus)
   - Import `app/sql/local.sql`

4. **Start the site**
   - Click **Start site** in Local WP
   - Visit `http://landingpage-papayasoap.local`

5. **Access WordPress Admin**
   - Navigate to `http://landingpage-papayasoap.local/wp-admin`
   - Log in with your Local WP credentials

### Export as Static Site (Optional)

The **Simply Static** plugin is pre-installed. To generate a static export:
1. Go to **WP Admin → Simply Static → Generate**
2. The static files will be placed in the configured output directory
3. Deploy the static output to any hosting provider (Vercel, Netlify, GitHub Pages, etc.)

---

## Screenshots

### Hero Section
![screenshot of hero section]

### Pain Points Section
![screenshot of pain points section]

### Facts & Benefits Section
![screenshot of facts section]

### Product Introduction
![screenshot of product introduction section]

### Key Benefits
![screenshot of key benefits section]

### Customer Reviews (WhatsApp)
![screenshot of customer reviews WhatsApp section]

### Testimonials
![screenshot of testimonial]

### Bonus Section
![screenshot of bonus section]

### Pricing Section
![screenshot of pricing section]

### Money-Back Guarantee
![screenshot of money-back guarantee section]

### FAQ Section
![screenshot of FAQ section]

### Footer
![screenshot of footer section]

---

## What I Learned

- **Sales funnel structure**: Applying the AIDA (Attention, Interest, Desire, Action) framework to landing page layout
- **Elementor workflow**: Building pixel-perfect sections using Elementor's visual editor without writing custom CSS
- **Copywriting patterns**: Structuring pain points, benefits, and urgency triggers for e-commerce conversion
- **Static site export**: Using Simply Static to convert a WordPress site into deployable static HTML files
- **Local WP development**: Setting up an isolated local WordPress environment with custom PHP, Nginx, and MySQL configurations
- **Mobile-first responsive design**: Ensuring layouts adapt across mobile, tablet, and desktop breakpoints

---

## License

This project is built for portfolio/demonstration purposes. All brand assets, product images, and copy belong to Kalysa Beauty. The codebase structure and implementation approach may be referenced freely.

---

*Built with WordPress + Elementor | Kalysa Beauty — www.Kalysa_Beauty.com*
