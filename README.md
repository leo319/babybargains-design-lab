# BabyBargains design lab

https://leo319.github.io/babybargains-design-lab/

Or on the site: https://baby-bargains.com/design-lab/

## Parent Planner homepage mocks

Self-contained HTML (inline CSS, tiny JS, no build step) in [`parent-planner/`](parent-planner/):

| Page | File |
| --- | --- |
| Chooser | [`parent-planner/index.html`](parent-planner/index.html) |
| Mock 1 — Editorial magazine | [`parent-planner/mock-1-editorial.html`](parent-planner/mock-1-editorial.html) |
| Mock 2 — Spreadsheet decision tool | [`parent-planner/mock-2-compare.html`](parent-planner/mock-2-compare.html) |
| Mock 3 — Shopping-app feed | [`parent-planner/mock-3-feed.html`](parent-planner/mock-3-feed.html) |

### Previewing over HTTPS

- **GitHub Pages** (once enabled: Settings → Pages → Deploy from a branch → `main` / root):
  `https://leo319.github.io/babybargains-design-lab/parent-planner/`
- **htmlpreview** (works without Pages):
  `https://htmlpreview.github.io/?https://raw.githubusercontent.com/leo319/babybargains-design-lab/main/parent-planner/index.html`
- **raw.githack** (works without Pages; shows a one-click interstitial):
  `https://raw.githack.com/leo319/babybargains-design-lab/main/parent-planner/index.html`
- jsDelivr (`cdn.jsdelivr.net/gh/...`) serves `.html` as `text/plain`, so it shows source rather than the page.

## Parent Planner block theme (Mock 1)

An installable WordPress block theme that implements Mock 1 lives in [`theme/babybargains-parent-planner/`](theme/babybargains-parent-planner/). See its [README](theme/babybargains-parent-planner/README.md) for how to zip it, upload it to the Atomic site, activate it, and set up the front page.
