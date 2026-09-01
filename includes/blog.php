<?php
/**
 * Blog index.
 *
 * The registry below is the single source of truth for every post: the
 * listing page, related-post blocks, schema and the sitemap all read from it.
 * Adding a post means one entry here plus one file in /blog/.
 *
 * `hub` maps each post to the money page it must link into — strategy §6:
 * "Every surviving post gets a contextual link into its money hub. Most of
 * those 370 posts almost certainly link nowhere useful."
 */

declare(strict_types=1);

const BLOG_HUBS = [
    'hair-transplant' => ['label' => 'Hair transplant', 'url' => '/hair-transplant-in-gurgaon'],
    'prp'             => ['label' => 'PRP & non-surgical', 'url' => '/hair-prp-treatment-in-gurgaon'],
    'beard'           => ['label' => 'Beard transplant', 'url' => '/beard-transplant-gurgaon'],
    'hair-fall'       => ['label' => 'Hair fall', 'url' => '/hair-fall-treatment-in-gurgaon'],
];

/**
 * Newest first. `updated` is optional and only set when a post has been
 * meaningfully revised — never bumped just to look fresh.
 */
const BLOG_POSTS = [
    [
        'slug'     => 'norwood-scale-explained',
        'title'    => 'The Norwood Scale Explained: Which Stage Are You, and What It Means',
        // Shorter form for the <title> tag only; the H1 keeps the full headline.
        'seo_title'=> 'The Norwood Scale Explained: All 7 Stages',
        'excerpt'  => 'The seven stages of male pattern hair loss, what each one actually looks like, and why the stage matters far less than whether your loss has stabilised.',
        'hub'      => 'hair-transplant',
        'published'=> '2026-08-21',
        'updated'  => null,
        'minutes'  => 8,
        'image_alt'=> 'Diagram of the seven Norwood stages of male pattern hair loss',
    ],
];

/** All posts, newest first. */
function blog_posts(?string $hub = null, ?string $excludeSlug = null): array
{
    $posts = array_filter(BLOG_POSTS, static function (array $p) use ($hub, $excludeSlug): bool {
        if ($excludeSlug !== null && $p['slug'] === $excludeSlug) {
            return false;
        }
        return $hub === null || $p['hub'] === $hub;
    });

    usort($posts, static fn (array $a, array $b): int => strcmp($b['published'], $a['published']));

    return array_values($posts);
}

/** One post by slug, or null. */
function blog_post(string $slug): ?array
{
    foreach (BLOG_POSTS as $post) {
        if ($post['slug'] === $slug) {
            return $post;
        }
    }
    return null;
}

function blog_url(string $slug): string
{
    return '/blog/' . $slug;
}

/** "21 August 2026" */
function blog_date(string $iso): string
{
    $d = date_create($iso);
    return $d ? $d->format('j F Y') : $iso;
}

/** Listing card. */
function blog_card(array $post): string
{
    $hub = BLOG_HUBS[$post['hub']] ?? null;

    ob_start(); ?>
<article class="card" style="padding:0;overflow:hidden;display:flex;flex-direction:column">
  <a href="<?= e(blog_url($post['slug'])) ?>" aria-label="<?= e($post['title']) ?>">
    <div class="media ratio-16-10 media--shadow"><img src="/assets/img/case-uttam-gurgaon.jpg" alt="<?= e($post['image_alt']) ?>" width="800" height="500" loading="lazy"></div>
  </a>
  <div style="padding:24px;display:flex;flex-direction:column;flex:1 1 auto">
    <?php if ($hub !== null): ?>
      <span class="pill" style="align-self:flex-start"><?= e($hub['label']) ?></span>
    <?php endif; ?>
    <h3 class="h3 mt-2" style="font-size:20px">
      <a href="<?= e(blog_url($post['slug'])) ?>" style="color:var(--ink);text-decoration:none"><?= e($post['title']) ?></a>
    </h3>
    <p class="body-s mt-2" style="flex:1 1 auto"><?= e($post['excerpt']) ?></p>
    <p class="meta mt-3">
      <time datetime="<?= e($post['published']) ?>"><?= e(blog_date($post['published'])) ?></time>
      · <?= (int) $post['minutes'] ?> min read
      · Reviewed by <?= e(REVIEWED_BY) ?>
    </p>
  </div>
</article>
<?php
    return (string) ob_get_clean();
}
