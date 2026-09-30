# Club Sportif

University practice project for a **sports club management website** with a public **Front Office** and an administrative **Back Office**.

The current version focuses on **HTML5 and CSS3**. The project is ongoing and will later be extended with JavaScript and PHP.

---

## Features

### Front Office

- Homepage
- Activity catalogue
- Member registration form
- Club presentation and statistics
- Activity availability indicators
- Contact section

### Back Office

- Activity list
- Activity details
- Activity form
- Member list
- Member details
- Member form
- Administrative sidebar navigation

---

## Project Structure

```text
club-sportif/
│
├── assets/
│   ├── css/
│   │   └── style.css
│   │
│   └── img/
│       └── logo.png
│
├── frontoffice/
│   ├── index.html
│   ├── activites-liste.html
│   └── inscription-adherent.html
│
├── backoffice/
│   ├── activites-liste.html
│   ├── activite-detail.html
│   ├── activite-form.html
│   ├── adherents-liste.html
│   ├── adherent-detail.html
│   └── adherent-form.html
│
└── README.md
```

The Front Office and Back Office both contain an `activites-liste.html` file, but the pages have different purposes.

---

# Front Office

## `index.html`

Main public page of the sports club.

Contains:

- Navigation bar
- Welcome section
- Featured activities
- Availability badges
- Club presentation
- Club statistics
- Activities call-to-action
- Contact information
- Footer

Current featured activities:

- Football
- Natation
- Fitness

---

## `activites-liste.html`

Public page displaying the club's available activities.

Each activity contains:

- Name
- Short presentation
- Level
- Coach
- Schedule
- Location
- Session duration
- Monthly price
- Availability
- Recommended equipment

Current activities:

- Football
- Natation
- Fitness

---

## `inscription-adherent.html`

Public registration form for new members.

Fields:

- Last name
- First name
- Email
- Phone number
- Desired activity
- Subscription duration
- Price

The form includes basic HTML validation using attributes such as:

```html
required
minlength
maxlength
pattern
readonly
```

---

# Back Office

The Back Office provides the administrative interface for managing activities and members.

The layout includes:

- Back Office navbar
- Sidebar navigation
- Main administration area

Sidebar sections:

- Activities
- New activity
- Members
- New member

---

## `activites-liste.html`

Administrative overview of the club's activities.

The table contains:

- Activity
- Summary
- Level
- Coach
- Schedule
- Location
- Duration
- Price
- Availability

---

## `activite-detail.html`

Detailed administrative view of the activities.

Each activity displays:

- Name
- Description
- Level
- Coach
- Schedule
- Location
- Duration
- Price
- Availability
- IDs of registered members

Available actions:

- Modify
- Delete

---

## `activite-form.html`

Form used for activity creation or modification.

Fields:

- Activity name
- Category
- Description
- Day
- Schedule
- Monthly price
- Number of places

The form uses HTML validation including text length restrictions, number limits, required fields and a schedule format pattern.

---

## `adherents-liste.html`

Administrative list of registered members.

The table contains:

- Member ID
- Last name
- First name
- Email
- Activity or activities
- Subscription duration
- Price

---

## `adherent-detail.html`

Detailed view of registered members.

Displayed information:

- Member ID
- Last name
- First name
- Email
- Activities
- Subscription duration
- Price

Available actions:

- Modify
- Delete

---

## `adherent-form.html`

Administrative form for adding or modifying a member.

Fields:

- Last name
- First name
- Email
- Phone number
- Activity

Basic HTML validation is applied to the form fields.

---

# Styling

All pages share the stylesheet:

```text
assets/css/style.css
```

The stylesheet contains the general design system and reusable components used throughout the Front Office and Back Office.

---

## CSS Variables

CSS custom properties are used for common design values such as:

- Primary colours
- Background colours
- Text colours
- Borders
- Border radius
- Shadows
- Fonts

Example:

```css
:root {
    --color-primary: #0b5ed7;
    --color-primary-dark: #094db8;
    --color-navy: #0a2540;
    --color-red: #B80F0A;
    --color-accent: #00c2a2;
    --color-bg: #f5f7fa;
    --color-white: #ffffff;
    --color-text: #1b1b1b;
    --color-muted: #6c757d;
    --color-border: #ced4da;
}
```

---

## Reusable Components

The stylesheet contains reusable classes for:

- Navigation bars
- Containers
- Activity cards
- Detail cards
- Forms
- Buttons
- Tables
- Status badges
- Sidebar
- Footer
- Statistics sections

Examples:

```text
.container