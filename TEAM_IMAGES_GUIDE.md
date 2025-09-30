# Team Images Setup Guide

## How to Add Team Images

### 1. Image Requirements
- **Format**: JPG, PNG, or WebP
- **Size**: 400x400 pixels (square images work best)
- **Quality**: High resolution for crisp display
- **Style**: Professional headshots with good lighting

### 2. File Structure
Place your team images in the following directory:
```
public/images/team/
├── john-smith.jpg
├── sarah-johnson.jpg
└── mike-chen.jpg
```

### 3. Image Naming Convention
Use the exact filenames as specified in the code:
- `john-smith.jpg` - CEO & Founder
- `sarah-johnson.jpg` - Lead Designer  
- `mike-chen.jpg` - Lead Developer

### 4. How It Works
- **With Images**: If images exist, they will be displayed as circular profile photos
- **Without Images**: If images don't exist, colorful gradient circles with initials will be shown as fallbacks
- **Responsive**: Images automatically scale and maintain aspect ratio
- **Hover Effects**: Images have subtle hover animations

### 5. Adding Your Own Team Members

To add more team members, follow these steps:

1. **Add the image** to `public/images/team/your-name.jpg`
2. **Update the about.blade.php** file by adding a new team member section:

```html
<div class="group text-center">
    <div class="relative mb-6">
        <div class="w-48 h-48 rounded-full mx-auto mb-4 group-hover:scale-105 transition-transform duration-300 overflow-hidden shadow-lg">
            <img 
                src="{{ asset('images/team/your-name.jpg') }}" 
                alt="Your Name - Your Title"
                class="w-full h-full object-cover"
                onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';"
            >
            <!-- Fallback gradient if image not found -->
            <div class="w-full h-full bg-gradient-to-br from-blue-400 to-blue-600 rounded-full flex items-center justify-center text-white text-4xl font-bold" style="display: none;">
                YN
            </div>
        </div>
    </div>
    <h3 class="text-2xl font-bold text-gray-900 mb-2">Your Name</h3>
    <p class="text-primary-600 font-semibold mb-4">Your Title</p>
    <p class="text-gray-600">
        Your description here.
    </p>
    <div class="flex justify-center space-x-4 mt-4">
        <a href="#" class="text-gray-400 hover:text-primary-600 transition-colors">
            <!-- LinkedIn icon -->
        </a>
        <a href="#" class="text-gray-400 hover:text-primary-600 transition-colors">
            <!-- Twitter icon -->
        </a>
    </div>
</div>
```

### 6. Customizing Colors
Each team member can have a different fallback color:
- Change `from-blue-400 to-blue-600` to your preferred gradient
- Available colors: blue, green, purple, red, yellow, indigo, pink, etc.

### 7. Social Media Links
Update the social media links by replacing the `#` with actual URLs:
- LinkedIn: `href="https://linkedin.com/in/username"`
- Twitter: `href="https://twitter.com/username"`

## Current Team Setup
✅ **John Smith** - CEO & Founder (blue gradient fallback)
✅ **Sarah Johnson** - Lead Designer (green gradient fallback)  
✅ **Mike Chen** - Lead Developer (purple gradient fallback)

The team section is now ready to display professional images with beautiful fallbacks!
