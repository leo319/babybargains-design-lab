# Baby Bargains deal Reel template

Reusable HyperFrames by HeyGen composition for a **16-second, 1080×1920 Instagram Reel**. Seven scenes: category hook → four product deals → roundup → website CTA. Includes brand logo, animation library, sample product images and an original instrumental soundtrack.

## Make the next Reel

1. Copy this folder to a new working directory for the campaign.
2. Edit `deals.js`: category, opening headline, website, CTA and **four** products. Each product has a brand, name, image path, current price, original price and discount label.
3. Replace the four sample pictures in `assets/` with high-resolution product images. The layout shows the whole image using `object-fit: contain`.
4. Update **“Up to 50% off”** and **“Four finds for their little world”** in `index.html` as appropriate. Confirm all prices, discounts and links before publishing; the examples are a historical snapshot, not a live feed.
5. Preview, check, and render using the commands below. The video is designed for sound-off viewing and includes optional music.

Keep four products for this version. Changing the number requires adjusting scene timing and the 16-second composition/audio duration in `index.html`. The final CTA says “Link in bio”; ensure the profile link leads to the deals.

## Setup and export

Install Node.js 24+, npm, FFmpeg and FFprobe. Both `ffmpeg` and `ffprobe` must be on your PATH. Then, from this folder:

```sh
npm install
npm run preview
npm run check
npm run render
```

`preview` opens HyperFrames Studio; its timeline provides playback. `index.html` alone is composition source, not a standalone video player. `render` writes `reel.mp4`. The renderer may download its browser runtime on first use. HyperFrames is pinned to 0.8.77, the version used for this template.

## Prompt for future work

> Use marketing/deal-reels from the Baby Bargains design-lab repo. Create a new Reel with four current deals from one category on baby-bargains.com. Verify prices, replace the product images and deal data, preserve the branding and pacing, and export a 1080×1920 MP4 with music.

## Included example and asset provenance

Category: **Nursery & Play**, captured from https://baby-bargains.com/all-deals/ on 2026-09-26.

| Product | Deal price | Original price | Displayed discount |
| --- | --- | --- | --- |
| Stokke Sleepi Changing Table | $224.50 | $449 | 50% |
| Stokke Sleepi Changer | $149.50 | $299 | 50% |
| Costway 30-Key Classic Baby Grand Piano | $84.99 | $159.99 | 47% |
| Costway 58in Toddler Foam Play Mat | $69.99 | $129.99 | 46% |

Sample PNGs are low-resolution crops of public product cards captured for the original draft. Replace them with approved original photography for production. Logo supplied by Baby Bargains. Product photography retains its respective owners' rights. `music.mp3` is an original synthesized instrumental made for this composition.

Reference: [CapCut Product Sale Reels](https://www.capcut.com/template-detail/Product-Sale-Reels/7539057399420800309). The draft follows its listed seven-clip, 9:16 format; it is an original interpretation, not an exact recreation of its preview animation.

`gsap.min.js` is GSAP 3.15.0, © GreenSock, distributed under the [GSAP Standard License](https://gsap.com/standard-license). Its license header is retained. HyperFrames is Apache-2.0 licensed. This folder does not apply a blanket license to third-party assets.

## Validation

Original composition passed HyperFrames lint, runtime, layout, motion and contrast checks. The repository copy replaces the large WAV with a compact MP3; validate before each new export. Generated MP4s, dependency folders, raw browser captures and local machine paths are excluded from version control.
