// Builds the three hair-transplant technique pages.
// Run from the repo root:  node _design/_build/build.mjs
//
// Shared chrome comes from chrome.mjs. Everything clinical lives in the specs
// below, and is deliberately different per technique: same house layout, no two
// pages saying the same thing with the acronym swapped.

import { renderPage } from './chrome.mjs';
import { writeFileSync, mkdirSync } from 'node:fs';

/* ────────────────────────────────  FUE  ──────────────────────────────── */

const FUE = {
  key: 'fue',
  slug: 'fue-hair-transplant-in-gurgaon',
  navKey: 'fue',
  crumb: 'FUE hair transplant in Gurgaon',
  badge: 'FUE hair transplant in Gurgaon',
  metaTitle: 'FUE Hair Transplant in Gurgaon | DenceSpot Clinic',
  metaDesc: 'Doctor-performed FUE hair transplant in Gurgaon. Follicular units extracted one at a time, no linear scar, donor area mapped before any graft number is quoted.',
  h1: 'FUE Hair Transplant in Gurgaon Without a Linear Donor Scar',
  lede: 'FUE takes follicular units out of the donor area one at a time with a fine punch, so there is no strip and no linear scar. It is the technique most pattern hair loss is treated with. What decides whether it works for you is not the technique &mdash; it is how much your donor area can safely give.',
  heroImg: 'FUE extraction in progress — punch and donor area under magnification',
  heroBullets: [
    'No linear scar &mdash; dot healing across the donor',
    'Day-case procedure under local anaesthetic',
    'Donor area mapped before any number is quoted',
    'Sector 39, Gurugram &middot; Mon&ndash;Sat'
  ],
  procedureName: 'FUE hair transplant (follicular unit extraction)',
  procedureAlt: 'Follicular unit extraction',
  howPerformed: 'Individual follicular units are extracted from the donor area of the scalp with a fine punch, sorted and trimmed under magnification, and placed into recipient sites prepared in the planned direction, angle and density across the thinning zones.',
  preparation: 'Clinical assessment of hair-loss pattern and donor density, review of medication and blood-thinning agents, blood investigations, photographic mapping and hairline design agreed with the patient before the procedure date.',
  followup: 'Wash instruction and review in the first week, then scheduled photographic reviews as the transplanted hair sheds and regrows, with a fuller assessment at roughly ten to twelve months.',
  trust: [
    { icon: 'scope', title: 'Punch under magnification', text: 'Extraction judged graft by graft, not on autopilot.' },
    { icon: 'shield', title: 'No linear scar', text: 'Dot healing spread across the donor area.' },
    { icon: 'chart', title: 'Donor mapped first', text: 'What can safely be taken is measured, not guessed.' },
    { icon: 'clock', title: 'Home the same day', text: 'Local anaesthetic, day-case, you walk out.' },
    { icon: 'question', title: 'Told if it is too early', text: 'Unstable loss is treated medically before surgery.' }
  ],
  whatIs: {
    h2: 'What Is an FUE Hair Transplant?',
    paras: [
      'FUE stands for follicular unit extraction. Hair does not grow as single strands but in natural groupings of one to four hairs, called follicular units. In FUE, each of those units is removed from the donor area individually, using a punch typically well under a millimetre across, and every unit leaves a tiny round opening that heals as a pale dot rather than a line.',
      'Those units are then sorted under magnification, kept in a holding solution, and placed into recipient sites made across the thinning area in the direction and angle the surrounding hair already grows. Once healed they behave exactly like the hair they came from &mdash; washed, cut and styled normally.',
      'The donor area is the whole story. Hair at the back and sides of the scalp is generally resistant to the hormonal process behind pattern loss, which is why it is used, but it is a finite supply that has to last your lifetime. Take too much and the donor thins visibly, which cannot be undone. A responsible plan spends that supply across the areas that matter most to you, in the order that makes sense as the loss progresses.',
      'This is why nothing sensible can be quoted from a photograph. Two people with identical-looking recession can have completely different donor density, and the plans that follow are not comparable.'
    ],
    img: 'Donor area after extraction — dot healing pattern visible',
    aside: 'FUE moves your own permanent hair; it does not create new hair. Donor supply, not technique, sets the ceiling on what is achievable.',
    links: [
      { href: 'hair-transplant-in-gurgaon.html', label: 'Hair transplant overview' },
      { href: 'dhi-hair-transplant-in-gurgaon.html', label: 'How DHI differs' },
      { href: '#faqs', label: 'Read the FAQs' }
    ]
  },
  candidacy: {
    h2: 'Who FUE Suits',
    lede: 'FUE covers the broadest range of cases of the three techniques. These are the presentations it is most often the right answer for &mdash; confirmed only after examining your donor area.',
    cards: [
      { icon: 'hair', title: 'Receding hairline', text: 'A defined, stable recession with enough donor behind it to rebuild the frontal third and keep something in reserve.' },
      { icon: 'head', title: 'Crown thinning', text: 'The crown swallows grafts because of the way hair whorls there. It is treatable, but it needs an honest conversation about donor budget first.' },
      { icon: 'layers', title: 'Broad coverage in one session', text: 'Where several zones need work, FUE places grafts efficiently over a large area in a single day.' },
      { icon: 'ruler', title: 'Short hairstyles', text: 'If you wear your hair very short or shave the sides, dot healing conceals far better than a linear scar would.' },
      { icon: 'pin', title: 'Repair and refinement', text: 'Softening a hairline that was placed too straight or too low elsewhere, or filling gaps left by an earlier procedure.' },
      { icon: 'doc', title: 'Stable, staged pattern loss', text: 'Loss that has settled into a recognisable pattern, in someone who understands that surrounding hair keeps thinning.' }
    ]
  },
  feature: `
  <section id="grafts" style="padding:96px 0;background:#F5F4F7">
    <div style="max-width:1280px;margin:0 auto;padding:0 40px">
      <div style="max-width:720px">
        <p style="font-size:12px;font-weight:700;letter-spacing:.14em;text-transform:uppercase;color:#0B7A5E">Read this before comparing quotes</p>
        <h2 style="margin-top:14px;font-size:40px;font-weight:800;letter-spacing:-.025em;line-height:1.1;color:#1a1147;text-wrap:balance">A Graft Is Not a Hair &mdash; and That Is Where Quotes Go Wrong</h2>
        <p style="margin-top:18px;font-size:16px;line-height:1.7;color:#3E3560">This one distinction explains most of the price confusion in the Gurgaon market. It is worth two minutes.</p>
      </div>
      <div style="margin-top:40px;display:grid;grid-template-columns:1fr 1fr;gap:24px">
        <div style="background:#fff;border:1px solid #E7E4ED;border-radius:24px;padding:32px;box-shadow:0 4px 16px -4px rgba(26,17,71,.06)">
          <h3 style="font-size:20px;font-weight:700;color:#1a1147">Graft</h3>
          <p style="margin-top:10px;font-size:15px;line-height:1.7;color:#3E3560">One follicular unit &mdash; a natural grouping that contains anywhere from one to four hairs. It is what gets extracted and what gets placed. It is also the unit almost every clinic prices in.</p>
        </div>
        <div style="background:#fff;border:1px solid #E7E4ED;border-radius:24px;padding:32px;box-shadow:0 4px 16px -4px rgba(26,17,71,.06)">
          <h3 style="font-size:20px;font-weight:700;color:#1a1147">Hair</h3>
          <p style="margin-top:10px;font-size:15px;line-height:1.7;color:#3E3560">A single strand. Two thousand grafts might carry anywhere from roughly 4,000 to 5,000 hairs depending on the donor &mdash; which is why some clinics quote hair counts instead. The number looks bigger. The transplant is the same size.</p>
        </div>
      </div>
      <div style="margin-top:24px;background:#1a1147;border-radius:24px;padding:40px;color:#fff">
        <h3 style="font-size:22px;font-weight:700;letter-spacing:-.02em">Three questions that make quotes comparable</h3>
        <div style="margin-top:24px;display:grid;grid-template-columns:repeat(3,1fr);gap:24px">
          <div>
            <p style="font-size:15px;font-weight:700;color:#10B981">&ldquo;Grafts or hairs?&rdquo;</p>
            <p style="margin-top:8px;font-size:14px;line-height:1.65;color:rgba(255,255,255,.72)">If one clinic quotes 4,500 and another 2,000, they may be describing the same procedure. Always ask which unit the number is in.</p>
          </div>
          <div>
            <p style="font-size:15px;font-weight:700;color:#10B981">&ldquo;How was that count arrived at?&rdquo;</p>
            <p style="margin-top:8px;font-size:14px;line-height:1.65;color:rgba(255,255,255,.72)">A count should come from a zone-by-zone map of your scalp. A round number offered over the phone is a sales figure, not a plan.</p>
          </div>
          <div>
            <p style="font-size:15px;font-weight:700;color:#10B981">&ldquo;What is left for later?&rdquo;</p>
            <p style="margin-top:8px;font-size:14px;line-height:1.65;color:rgba(255,255,255,.72)">Pattern loss continues. A plan that empties the donor now leaves nothing for the recession you will have in ten years.</p>
          </div>
        </div>
      </div>
      <p style="margin-top:20px;font-size:13px;line-height:1.6;color:#6B6485;max-width:900px">The cheapest per-graft rate applied to an inflated graft count is more expensive than an honest quote, and it costs donor hair you cannot get back. This is the single most useful thing to understand before you speak to any clinic &mdash; including this one.</p>
    </div>
  </section>
`,
  why: {
    h2: 'Why Have FUE Done Here?',
    cards: [
      { icon: 'chart', title: 'Donor budget, not a sales figure', text: 'Your donor is measured and mapped, and the graft number follows from it. If what you want is not supportable by what you have, you are told at the consultation, not on the day.' },
      { icon: 'hair', title: 'Hairline drawn on your face', text: 'Position, shape and deliberate irregularity judged against your features, your forehead and your age &mdash; not a template traced onto everyone.' },
      { icon: 'scope', title: 'Extraction judged graft by graft', text: 'Punch size and depth adapted to your hair calibre and skin as the session goes on, to keep transection down and the donor looking even.' },
      { icon: 'shield', title: 'Doctor-performed, not delegated', text: 'The doctor who assessed you does the extraction and site creation. You are told in advance exactly who does what.' },
      { icon: 'list', title: 'Written, itemised estimate', text: 'The graft number, the technique, what is included and what is not &mdash; in writing, before you book a date. Nothing is added afterwards.' },
      { icon: 'camera', title: 'Reviews that are scheduled', text: 'Follow-up at fixed points with standardised photographs, so growth is judged against a record rather than memory.' }
    ]
  },
  journey: {
    h2: 'Your FUE Journey',
    lede: 'Seven stages, in the order you will experience them.',
    steps: [
      { title: 'Consultation', text: 'History, medication review, and what you actually want the result to do.' },
      { title: 'Scalp &amp; donor exam', text: 'Density, calibre and laxity measured; pattern staged; baseline photographs.' },
      { title: 'Graft mapping', text: 'Zone-by-zone count and a hairline drawn on your face for you to approve.' },
      { title: 'Written plan', text: 'Technique, graft number, timeline, cost and what is left in reserve.' },
      { title: 'Procedure day', text: 'Local anaesthetic, extraction, site creation and placement, with breaks.' },
      { title: 'First-week care', text: 'Washing taught in person, crusting settles, review before you resume normal life.' },
      { title: 'Growth reviews', text: 'Shedding, regrowth and density tracked photographically to twelve months.' }
    ]
  },
  procedure: {
    h2: 'How an FUE Procedure Works',
    lede: 'A day case, start to finish. Larger sessions run through most of the day with proper breaks.',
    steps: [
      { title: 'Design and consent', text: 'The hairline is drawn while you are sitting upright, checked in a mirror, and agreed before anything else happens. Nothing is redrawn once you are lying down.' },
      { title: 'Donor preparation', text: 'The donor area is trimmed to a uniform short length so the punch can follow each follicle accurately, then anaesthetised locally.' },
      { title: 'Extraction', text: 'Follicular units are removed one at a time with a fine punch. Punch size is matched to your hair, and the harvest is spread across the donor so density stays even rather than patchy.' },
      { title: 'Sorting under magnification', text: 'Grafts are separated by how many hairs each carries and held in solution. Single-hair units are set aside for the hairline; multi-hair units go behind, where density reads.' },
      { title: 'Recipient sites', text: 'Sites are made at the angle, direction and depth the surrounding hair grows. This step, more than extraction, is what makes a result look grown rather than planted.' },
      { title: 'Placement and discharge', text: 'Grafts are placed into the prepared sites, the donor is dressed, medication and written aftercare are issued, and you go home the same day.' }
    ],
    img: 'Recipient site creation, or sorted grafts under magnification',
    asideTitle: 'Before the day',
    aside: [
      'Bring your full medication list, including supplements.',
      'Stop alcohol and avoid blood thinners as instructed.',
      'Eat a proper breakfast &mdash; it is a long day.',
      'Wear a shirt that buttons, not something pulled over the head.',
      'Arrange a lift home if you would rather not drive.'
    ]
  },
  recovery: {
    h2: 'What Happens After FUE',
    lede: 'A general guide to the phases most patients describe after FUE. Your own timeline is set by your doctor at your reviews.',
    phases: [
      { label: 'Week 1', title: 'Crusts and dot healing', text: 'Small crusts around each graft and pinpoint scabbing across the donor. Washing starts as instructed. Most people return to desk work within a few days.' },
      { label: 'Weeks 2&ndash;4', title: 'Shedding', text: 'Transplanted hairs commonly fall while the follicles stay put. Expected, and the most misunderstood phase &mdash; it is not a failed procedure.' },
      { label: 'Months 3&ndash;4', title: 'New growth', text: 'Fine new hairs start to appear, unevenly at first and often finer than the final texture. Donor dots have usually faded by now.' },
      { label: 'Months 5&ndash;9', title: 'Density builds', text: 'Coverage thickens and hair coarsens. This is the stretch where progress is easiest to see between photographs and hardest to judge in the mirror.' },
      { label: 'Months 10&ndash;12', title: 'The real result', text: 'A fair assessment of what the procedure achieved. Non-transplanted hair keeps thinning on its own schedule, so medical treatment often continues alongside.' }
    ],
    note: 'Individual recovery and growth vary. Transection, healing, donor characteristics and how closely aftercare is followed all affect the outcome. Timelines here are general patient education, not a promise of results, and no clinic can guarantee a specific density.'
  },
  results: {
    h2: 'FUE Results',
    mainTitle: 'Frontal and hairline restoration',
    mainMeta: 'FUE &middot; graft count to be confirmed &middot; 10-month progress',
    cards: [
      { img: 'Crown before / after pair', title: 'Crown restoration', meta: 'FUE &middot; 12-month review' },
      { img: 'Donor area healing at review', title: 'Donor area at review', meta: 'FUE &middot; dot healing, 6 months' }
    ]
  },
  doctorPara: 'Why the donor assessment matters more than the technique: FUE is often sold on the fact that it leaves no linear scar, which is true and largely beside the point. What determines whether you are happy in ten years is whether the donor was read correctly and spent sensibly. Over-harvesting is the one complication that cannot be revised.',
  cost: {
    h2: 'FUE Hair Transplant Cost in Gurgaon',
    intro: 'There is no single price for FUE, in Gurgaon or anywhere else. Cost follows the plan and the plan follows the assessment, so we publish the factors rather than a headline figure and give you an itemised estimate in writing.',
    factors: [
      { title: 'Number of grafts', text: 'Counted from the mapped plan, not estimated' },
      { title: 'Hair-loss stage', text: 'How much area needs coverage' },
      { title: 'Donor density', text: 'What can safely be harvested' },
      { title: 'Session structure', text: 'One session or staged across two' },
      { title: 'Hair characteristics', text: 'Calibre, curl and colour contrast all affect coverage' },
      { title: 'Supporting treatment', text: 'Medical therapy or PRP running alongside' }
    ],
    caution: 'A word of caution about &ldquo;per graft, starting from&rdquo; pricing: a low rate applied to an inflated graft count costs more than an honest quote, and the currency you overspend is donor hair. Ask any clinic how the graft number was arrived at, and what the price includes.'
  },
  faqs: [
    { q: 'What is an FUE hair transplant?', a: 'A procedure in which follicular units &mdash; natural groupings of one to four hairs &mdash; are extracted individually from the donor area with a fine punch and placed into thinning or bald areas at the angle and direction the surrounding hair grows. No strip of skin is removed, so there is no linear scar.' },
    { q: 'Does FUE leave scars?', a: 'It leaves many tiny round scars rather than one line &mdash; typically pale dots under a millimetre across, spread across the donor area. Spread properly they are difficult to see even at short hair lengths. Clustered extraction, or too many grafts taken from too small an area, is what makes them visible.' },
    { q: 'Do I have to shave my whole head for FUE?', a: 'The donor area is trimmed short so the punch can follow each follicle accurately. Whether the recipient area is trimmed depends on the case and is discussed at consultation. Unshaven and partially shaved approaches exist but suit smaller sessions; they are slower and not appropriate for every plan.' },
    { q: 'How many grafts can be done in one FUE session?', a: 'It depends on your donor supply, scalp laxity and how you tolerate a long day, not on a headline number. Large sessions are possible where the donor genuinely supports them; where it does not, staging across two procedures protects the donor and generally gives a better long-term result.' },
    { q: 'Is FUE painful?', a: 'The local anaesthetic injections are the uncomfortable part. The procedure itself is not typically painful, though it is long. Soreness, tightness or some swelling for a few days afterwards is normal and managed with prescribed medication.' },
    { q: 'How long does an FUE procedure take?', a: 'It scales with graft numbers. Smaller sessions take a few hours; larger ones run through most of the day with breaks for food and rest. It is a day-case procedure and you go home the same day.' },
    { q: 'When will transplanted hair start growing?', a: 'Transplanted hairs commonly shed within the first weeks while the follicles remain in place. New growth usually begins around three to four months, with a fuller picture at roughly ten to twelve months. Growth is uneven early on, which is normal.' },
    { q: 'Is FUE permanent?', a: 'Transplanted follicles keep the characteristics of the donor area and generally persist. Surrounding non-transplanted hair can continue to thin with age, however, which is why a long-term plan and ongoing medical treatment matter. No clinic can guarantee a specific density or a permanent outcome.' },
    { q: 'What is over-harvesting, and why does it matter?', a: 'Taking more grafts from the donor than it can spare, or taking them from too concentrated an area. The donor thins visibly, extraction dots become obvious, and there is no way to reverse it &mdash; you cannot put donor hair back. It is the reason a graft number should never be inflated to win a quote.' },
    { q: 'FUE or DHI &mdash; which is better?', a: 'Neither is universally better; extraction is essentially the same and the difference is in placement. DHI sets each graft with an implanter in a single action, which suits hairlines and detail zones. FUE placement into pre-made sites is more efficient across large areas. Read more about <a href="dhi-hair-transplant-in-gurgaon.html">DHI hair transplant</a>.' },
    { q: 'Can I have FUE if I had a strip procedure before?', a: 'Often yes. An existing FUT scar does not rule out FUE, though scalp laxity and the state of the donor need assessing, and grafts can sometimes be taken to camouflage the old scar itself. This is decided on examination.' },
    { q: 'Can women have FUE?', a: 'Sometimes. Female hair loss is more often diffuse, and hormonal, thyroid, iron or post-partum causes need investigating and treating first. Many women do better on medical treatment; surgery is considered selectively, for suitable patterns such as a receding frontal line.' },
    { q: 'How much does FUE cost in Gurgaon?', a: 'Cost depends on graft numbers, donor characteristics, session structure and any supporting treatment, so we quote after assessment rather than publishing a headline price. You receive an itemised written estimate before booking a date.' },
    { q: 'What happens at the FUE consultation?', a: 'History and medication review, scalp and donor examination with density measurement, pattern staging, photographs for your record, and a written plan covering technique, graft number, timeline and cost factors. Bring your medical history and a list of current medicines.' }
  ],
  localH2: 'FUE Hair Transplant at Our Gurgaon Clinic',
  localIntro: 'Consultation, procedure and every follow-up happen at our Sector 39 clinic in Gurugram, with the same doctor throughout. Patients travel to us from across Gurugram and neighbouring parts of South Delhi.',
  bookH2: 'Find Out What Your Donor Area Can Actually Support',
  bookLede: 'Bring your questions and your medication list. You will get a donor assessment, an honest view of whether FUE is right for your pattern of loss, and a written plan with a mapped graft number if it is &mdash; with no pressure to book a date on the day.',
  bookOptions: ['FUE hair transplant', 'FUE &mdash; crown', 'FUE &mdash; hairline', 'Repair of an earlier procedure', 'Not sure &mdash; please advise'],
  notes: {
    keywords: 'fue hair transplant in gurgaon (primary) &middot; fue hair transplant cost gurgaon &middot; fue vs dhi &middot; does fue leave scars &middot; graft vs hair. Primary term in title, H1, first paragraph, breadcrumb and one H2.',
    distinct: 'The graft-versus-hair section and the three comparison questions are unique to this page and exist nowhere else on the site. Candidacy is framed around donor supply, recovery is written around dot healing and the donor, and over-harvesting gets its own FAQ. Swap &ldquo;FUE&rdquo; for &ldquo;DHI&rdquo; anywhere here and the page stops making sense &mdash; which is the test.',
    links: '<span style="font-weight:600">Out:</span> hair transplant hub (nav, breadcrumb, what-is), DHI page (what-is and the comparison FAQ), cost page, doctor profile, results, clinic contact. <span style="font-weight:600">In:</span> the hub&rsquo;s FUE technique card (repointed to this page in this build), the homepage treatments grid, and the planned /fue-vs-dhi-hair-transplant and /fue-vs-fut-hair-transplant comparison articles.',
    needed: 'FUE extraction and donor photography; consented before/after pairs with verified graft counts; punch size range and whether extraction is manual or motorised, so the technique section can be specific; Dr. Nyra&rsquo;s registration number; and confirmation of typical maximum session size at this clinic.'
  }
};

/* ────────────────────────────────  DHI  ──────────────────────────────── */

const DHI = {
  key: 'dhi',
  slug: 'dhi-hair-transplant-in-gurgaon',
  navKey: 'dhi',
  crumb: 'DHI hair transplant in Gurgaon',
  badge: 'DHI hair transplant in Gurgaon',
  metaTitle: 'DHI Hair Transplant in Gurgaon | DenceSpot Clinic',
  metaDesc: 'Doctor-performed DHI hair transplant in Gurgaon. Each graft placed with an implanter for close control of angle and depth &mdash; suited to hairlines and detail zones. Book a consultation.',
  h1: 'DHI Hair Transplant in Gurgaon for Hairlines and Detail Zones',
  lede: 'DHI is not a different way of taking hair out &mdash; extraction is the same as FUE. What changes is placement: each graft is loaded into a fine implanter and set in one action, giving close control of depth, angle and spacing. That control is worth most exactly where it is hardest to fake, along the hairline.',
  heroImg: 'DHI implanter pen loaded with a graft, or hairline placement in progress',
  heroBullets: [
    'Each graft set at a controlled angle and depth',
    'No pre-made incisions in the recipient area',
    'Suited to hairlines, temples and detail work',
    'Sector 39, Gurugram &middot; Mon&ndash;Sat'
  ],
  procedureName: 'DHI hair transplant (direct hair implantation)',
  procedureAlt: 'Direct hair implantation',
  howPerformed: 'Follicular units are extracted from the donor area as in FUE, then each graft is loaded into a hollow implanter pen and placed directly into the recipient area in a single action, which creates the site and sets the graft at a controlled depth, angle and direction simultaneously.',
  preparation: 'Clinical assessment of hair-loss pattern and donor density, review of medication and blood-thinning agents, blood investigations, and hairline design agreed with the patient before the procedure date.',
  followup: 'Wash instruction and review in the first week, then scheduled photographic reviews through the shedding and regrowth phases, with a fuller assessment at roughly ten to twelve months.',
  trust: [
    { icon: 'pen', title: 'Implanter placement', text: 'Depth, angle and direction set in one action.' },
    { icon: 'hair', title: 'Built for hairlines', text: 'Where irregularity and angle decide the result.' },
    { icon: 'clock', title: 'Short time out of body', text: 'Grafts go from extraction to placement quickly.' },
    { icon: 'shield', title: 'No linear scar', text: 'Same donor healing as FUE &mdash; dots, not a line.' },
    { icon: 'question', title: 'Told when FUE is better', text: 'Large crowns are usually not a DHI job.' }
  ],
  whatIs: {
    h2: 'What Is a DHI Hair Transplant?',
    paras: [
      'DHI stands for direct hair implantation. It describes the placement stage of a hair transplant, not the whole procedure. Follicular units are extracted from the donor area exactly as they are in FUE &mdash; individually, with a fine punch, leaving dot healing rather than a line.',
      'The difference comes next. In a conventional FUE, recipient sites are made first across the whole area, and grafts are then placed into those waiting sites. In DHI, each graft is loaded into a hollow implanter &mdash; a pen-like instrument with a fine needle tip &mdash; and the surgeon makes the site and delivers the graft in one motion. Depth, angle, direction and spacing are all set at that moment, graft by graft.',
      'Two practical consequences follow. Control is finer, which matters most in the first few rows of a hairline where hairs emerge at very shallow angles and any uniformity reads as artificial. And each graft spends less time outside the body between extraction and placement.',
      'The trade-off is throughput. Loading implanters one graft at a time is slower than placing into pre-made sites, so DHI generally suits defined areas rather than very large sessions, and it usually costs more per graft. Where a whole crown needs covering, conventional FUE placement is often the better use of both time and money.'
    ],
    img: 'Close view of an implanter tip, or grafts loaded ready for placement',
    aside: 'DHI is a placement method, not a separate operation. Extraction, healing and growth timelines are the same as FUE &mdash; the control over angle and depth is what you are paying for.',
    links: [
      { href: 'fue-hair-transplant-in-gurgaon.html', label: 'How FUE differs' },
      { href: 'hair-transplant-in-gurgaon.html', label: 'Hair transplant overview' },
      { href: '#faqs', label: 'Read the FAQs' }
    ]
  },
  candidacy: {
    h2: 'Who DHI Suits',
    lede: 'DHI earns its extra time and cost in some cases and not others. Being told which one you are is more useful than being sold the newer-sounding option.',
    cards: [
      { icon: 'hair', title: 'Hairline design', text: 'The frontal rows, where single-hair grafts must sit at shallow angles with deliberate irregularity. This is where implanter control shows most clearly.' },
      { icon: 'ruler', title: 'Temples and temporal points', text: 'Very fine, acutely angled hair where getting the direction wrong is immediately visible. Small graft numbers, high precision.' },
      { icon: 'head', title: 'Refining existing density', text: 'Adding grafts between hairs that are already there, where pre-made sites risk damaging what still grows.' },
      { icon: 'scissors', title: 'Women&rsquo;s frontal restoration', text: 'Where shaving is unacceptable and the work is concentrated along a parting or frontal line, DHI can often be done with minimal trimming.' },
      { icon: 'layers', title: 'Small, defined sessions', text: 'A few hundred to a couple of thousand grafts in one region, where precision matters more than raw coverage speed.' },
      { icon: 'pin', title: 'Correcting an artificial hairline', text: 'Softening a line placed too straight or too low elsewhere, working around existing grafts without disturbing them.' }
    ]
  },
  feature: `
  <section id="implanter" style="padding:96px 0;background:#F5F4F7">
    <div style="max-width:1280px;margin:0 auto;padding:0 40px">
      <div style="max-width:720px">
        <p style="font-size:12px;font-weight:700;letter-spacing:.14em;text-transform:uppercase;color:#0B7A5E">What you are actually paying for</p>
        <h2 style="margin-top:14px;font-size:40px;font-weight:800;letter-spacing:-.025em;line-height:1.1;color:#1a1147;text-wrap:balance">What the Implanter Changes, and What It Does Not</h2>
        <p style="margin-top:18px;font-size:16px;line-height:1.7;color:#3E3560">DHI is marketed hard in Gurgaon, often as though it were a categorically better operation. It is a placement technique with real advantages in specific places. Here is the honest split.</p>
      </div>
      <div style="margin-top:40px;background:#fff;border:1px solid #E7E4ED;border-radius:24px;overflow:hidden;box-shadow:0 12px 32px -8px rgba(26,17,71,.1)">
        <table>
          <thead>
            <tr style="background:#1a1147;color:#fff;text-align:left">
              <th style="padding:18px 24px;font-size:12px;font-weight:700;letter-spacing:.12em;text-transform:uppercase;width:26%">Stage</th>
              <th style="padding:18px 24px;font-size:12px;font-weight:700;letter-spacing:.12em;text-transform:uppercase;width:37%">Conventional FUE</th>
              <th style="padding:18px 24px;font-size:12px;font-weight:700;letter-spacing:.12em;text-transform:uppercase;width:37%">DHI</th>
            </tr>
          </thead>
          <tbody>
            <tr style="border-top:1px solid #E7E4ED">
              <td style="padding:20px 24px;font-size:15px;font-weight:700;color:#1a1147;vertical-align:top">Extraction</td>
              <td style="padding:20px 24px;font-size:14px;line-height:1.6;color:#3E3560;vertical-align:top">Fine punch, one follicular unit at a time.</td>
              <td style="padding:20px 24px;font-size:14px;line-height:1.6;color:#3E3560;vertical-align:top">Identical. This is where the &ldquo;DHI is a different operation&rdquo; claim falls down.</td>
            </tr>
            <tr style="border-top:1px solid #E7E4ED;background:#FBFAFC">
              <td style="padding:20px 24px;font-size:15px;font-weight:700;color:#1a1147;vertical-align:top">Recipient sites</td>
              <td style="padding:20px 24px;font-size:14px;line-height:1.6;color:#3E3560;vertical-align:top">All made first, then grafts placed into them.</td>
              <td style="padding:20px 24px;font-size:14px;line-height:1.6;color:#3E3560;vertical-align:top">No separate step &mdash; the implanter makes the site and delivers the graft together.</td>
            </tr>
            <tr style="border-top:1px solid #E7E4ED">
              <td style="padding:20px 24px;font-size:15px;font-weight:700;color:#1a1147;vertical-align:top">Angle and depth control</td>
              <td style="padding:20px 24px;font-size:14px;line-height:1.6;color:#3E3560;vertical-align:top">Set when the site is made; good in skilled hands.</td>
              <td style="padding:20px 24px;font-size:14px;line-height:1.6;color:#3E3560;vertical-align:top">Set per graft at the moment of placement. The genuine advantage, and it is worth most in the front rows.</td>
            </tr>
            <tr style="border-top:1px solid #E7E4ED;background:#FBFAFC">
              <td style="padding:20px 24px;font-size:15px;font-weight:700;color:#1a1147;vertical-align:top">Speed and session size</td>
              <td style="padding:20px 24px;font-size:14px;line-height:1.6;color:#3E3560;vertical-align:top">Faster placement; better suited to large multi-zone coverage.</td>
              <td style="padding:20px 24px;font-size:14px;line-height:1.6;color:#3E3560;vertical-align:top">Slower per graft. Large crowns become a long and expensive way to get the same coverage.</td>
            </tr>
            <tr style="border-top:1px solid #E7E4ED">
              <td style="padding:20px 24px;font-size:15px;font-weight:700;color:#1a1147;vertical-align:top">Donor scar, healing, growth</td>
              <td style="padding:20px 24px;font-size:14px;line-height:1.6;color:#3E3560;vertical-align:top">Dot healing; shedding then regrowth from three to four months.</td>
              <td style="padding:20px 24px;font-size:14px;line-height:1.6;color:#3E3560;vertical-align:top">The same. DHI does not shorten recovery or speed up growth, whatever the advertising says.</td>
            </tr>
          </tbody>
        </table>
      </div>
      <div style="margin-top:24px;display:grid;grid-template-columns:1fr 1fr;gap:20px">
        <div style="background:#fff;border:1px solid #E7E4ED;border-left:3px solid #10B981;border-radius:20px;padding:26px 30px">
          <p style="font-size:15px;font-weight:700;color:#1a1147">A note on &ldquo;DHT hair transplant&rdquo;</p>
          <p style="margin-top:8px;font-size:15px;line-height:1.65;color:#3E3560">Some clinic pages advertise a &ldquo;DHT hair transplant&rdquo;. DHT is dihydrotestosterone &mdash; the hormone involved in pattern hair loss, not a surgical technique. The technique meant is DHI, direct hair implantation. If a page selling you surgery cannot keep the two apart, that tells you something.</p>
        </div>
        <div style="background:#fff;border:1px solid #E7E4ED;border-left:3px solid #C9C3D8;border-radius:20px;padding:26px 30px">
          <p style="font-size:15px;font-weight:700;color:#1a1147">On &ldquo;unshaven DHI&rdquo;</p>
          <p style="margin-top:8px;font-size:15px;line-height:1.65;color:#3E3560">DHI does make it easier to work without shaving the recipient area, which is why it is often advertised that way. The donor still needs trimming for extraction, though, and unshaven work is slower and practical only for smaller graft numbers. What is realistic in your case is decided at the consultation, not promised in advance.</p>
        </div>
      </div>
    </div>
  </section>
`,
  why: {
    h2: 'Why Have DHI Done Here?',
    cards: [
      { icon: 'question', title: 'You are told when not to have it', text: 'If your case is a large crown, we will say conventional FUE placement gives you the same coverage for less time and less money. DHI is recommended where it earns its cost.' },
      { icon: 'hair', title: 'Hairline drawn before you lie down', text: 'Position, shape and irregularity agreed with you sitting upright with a mirror. Implanter precision is worthless behind a badly designed line.' },
      { icon: 'pen', title: 'The doctor holds the implanter', text: 'Placement is the stage that decides how natural the result looks. It is not handed to a technician while the doctor moves on.' },
      { icon: 'clock', title: 'Graft handling timed', text: 'Extraction and placement are run so grafts spend as little time out of the body as practical, and holding conditions are consistent through the session.' },
      { icon: 'list', title: 'Priced per plan, in writing', text: 'You are told the graft number, the per-graft difference against FUE and what it buys you, before you book a date.' },
      { icon: 'camera', title: 'Reviewed on photographs', text: 'Standardised angles and lighting at fixed review points, so hairline density is assessed against a record.' }
    ]
  },
  journey: {
    h2: 'Your DHI Journey',
    lede: 'Seven stages, in the order you will experience them.',
    steps: [
      { title: 'Consultation', text: 'History, medication review, and what you want the hairline to do.' },
      { title: 'Scalp &amp; donor exam', text: 'Density and calibre measured, pattern staged, baseline photographs.' },
      { title: 'Technique decision', text: 'Whether DHI, FUE placement or a combination fits your zones and budget.' },
      { title: 'Hairline design', text: 'Drawn on your face, sitting upright, checked in a mirror and approved.' },
      { title: 'Written plan', text: 'Graft number, technique per zone, timeline and itemised cost.' },
      { title: 'Procedure day', text: 'Extraction, loading and implanter placement under local anaesthetic.' },
      { title: 'Reviews to 12 months', text: 'Shedding, regrowth and hairline density tracked photographically.' }
    ]
  },
  procedure: {
    h2: 'How a DHI Procedure Works',
    lede: 'The first half of the day is identical to FUE. The difference is in how the grafts go in.',
    steps: [
      { title: 'Design and consent', text: 'The hairline is drawn while you sit upright and checked in a mirror before anything begins. With DHI the line is executed graft by graft, so agreeing it first matters more, not less.' },
      { title: 'Donor trim and anaesthesia', text: 'The donor area is trimmed so the punch can follow each follicle, then anaesthetised locally. How much of the recipient area is trimmed depends on the plan agreed with you.' },
      { title: 'Extraction', text: 'Follicular units are removed one at a time with a fine punch, spread across the donor so density stays even. Identical to FUE.' },
      { title: 'Sorting and loading', text: 'Grafts are sorted by hair count under magnification, then loaded individually into implanters &mdash; single-hair units for the front rows, multi-hair units for behind.' },
      { title: 'Implanter placement', text: 'Each graft is placed in one action that sets site, depth, angle and direction together. The front rows go in at shallow angles with deliberate irregularity so the line does not read as a row.' },
      { title: 'Aftercare and discharge', text: 'The donor is dressed, medication and written aftercare issued, washing explained, and the first review booked. You go home the same day.' }
    ],
    img: 'Implanter placement along the hairline, or loaded implanters ready on the tray',
    asideTitle: 'Before the day',
    aside: [
      'Bring your full medication list, including supplements.',
      'Stop alcohol and avoid blood thinners as instructed.',
      'Confirm the shaving plan in advance so there are no surprises.',
      'Eat properly &mdash; DHI sessions run long by nature.',
      'Wear a shirt that buttons rather than a pullover.'
    ]
  },
  recovery: {
    h2: 'What Happens After DHI',
    lede: 'Recovery after DHI follows the same course as FUE, because the donor and the biology are the same. A general guide to the phases most patients describe.',
    phases: [
      { label: 'Week 1', title: 'Crusting settles', text: 'Small crusts around each placed graft and pinpoint healing in the donor. Washing starts as instructed; most people are back at desk work within a few days.' },
      { label: 'Weeks 2&ndash;4', title: 'Shedding', text: 'Placed hairs commonly fall while the follicles stay in place. Expected. DHI does not avoid this phase, whatever you may have read.' },
      { label: 'Months 3&ndash;4', title: 'New growth', text: 'Fine hairs begin to appear along the treated zones, unevenly at first. A new hairline looks patchy at this stage and is not yet judgeable.' },
      { label: 'Months 5&ndash;9', title: 'The line fills in', text: 'Density builds and hairs coarsen. Irregularity that looked odd early on starts reading as natural as surrounding hairs mature.' },
      { label: 'Months 10&ndash;12', title: 'The real result', text: 'A fair assessment of the hairline and its density. Non-transplanted hair behind it keeps thinning on its own schedule.' }
    ],
    note: 'Individual recovery and growth vary. DHI does not shorten recovery, guarantee higher graft survival or produce faster growth than well-executed FUE &mdash; claims to the contrary are marketing. Timelines here are general patient education, not a promise of results.'
  },
  results: {
    h2: 'DHI Results',
    mainTitle: 'Hairline reconstruction',
    mainMeta: 'DHI &middot; graft count to be confirmed &middot; 12-month progress',
    cards: [
      { img: 'Temple point before / after pair', title: 'Temporal points', meta: 'DHI &middot; 10-month review' },
      { img: 'Female frontal line before / after pair', title: 'Female frontal line', meta: 'DHI &middot; 12-month review' }
    ]
  },
  doctorPara: 'Why the design matters more than the instrument: an implanter gives you control over the angle of every graft, which is genuinely valuable &mdash; and completely wasted behind a hairline drawn in the wrong place. The commonest reason a transplant looks obviously done is not the tool used to place the grafts. It is a line set too low or too straight for the face it sits on, which no amount of precision can rescue later.',
  cost: {
    h2: 'DHI Hair Transplant Cost in Gurgaon',
    intro: 'DHI usually carries a higher per-graft rate than conventional FUE, because loading and placing each graft individually takes more chair time and more instruments. Whether that premium is worth paying depends on which zones you are treating &mdash; which is a clinical question, not a sales one.',
    factors: [
      { title: 'Number of grafts', text: 'Counted from the mapped plan, not estimated' },
      { title: 'Zones treated', text: 'Hairline and temples versus broad crown coverage' },
      { title: 'Technique mix', text: 'Whole-case DHI or DHI at the front with FUE behind' },
      { title: 'Shaving approach', text: 'Unshaven and partial-shave work takes longer' },
      { title: 'Session structure', text: 'One session or staged, and how long each runs' },
      { title: 'Supporting treatment', text: 'Medical therapy or PRP running alongside' }
    ],
    caution: 'Be careful with clinics that price DHI as a premium product and then recommend it for everything. If DHI is the answer to every case regardless of where the loss is, the recommendation is about the price list rather than your scalp. A combined plan &mdash; DHI at the front, FUE placement behind &mdash; is often the sensible answer and is usually cheaper than either sold whole.'
  },
  faqs: [
    { q: 'What is a DHI hair transplant?', a: 'A hair transplant in which each extracted follicular unit is loaded into a fine implanter and placed into the scalp in a single action that creates the site and sets the graft together. Extraction is the same as FUE; DHI describes the placement stage.' },
    { q: 'What is the real difference between DHI and FUE?', a: 'Extraction is essentially identical. In FUE all the recipient sites are made first and grafts are then placed into them; in DHI the implanter makes each site and delivers the graft in one motion, setting depth, angle and direction per graft. DHI gives finer control and is slower; FUE placement is more efficient over large areas.' },
    { q: 'Is DHI better than FUE?', a: 'Not universally, and any clinic saying otherwise is selling rather than assessing. DHI has a genuine advantage in hairlines, temples and work between existing hairs. For covering a large crown, conventional FUE placement generally gives the same coverage in less time and at lower cost.' },
    { q: 'Does DHI mean I do not have to shave my head?', a: 'It makes unshaven or partially shaved work easier, which is why it is advertised that way. The donor area still needs trimming so grafts can be extracted accurately, and unshaven work is slower and realistic only for smaller graft numbers. What is possible in your case is decided at consultation.' },
    { q: 'What is a &ldquo;DHT hair transplant&rdquo;?', a: 'A mistake. DHT is dihydrotestosterone, the hormone involved in pattern hair loss &mdash; not a surgical technique. Pages advertising a DHT transplant mean DHI, direct hair implantation.' },
    { q: 'Does DHI give better graft survival?', a: 'It is often claimed, on the basis that grafts spend less time outside the body and are handled less. It is a reasonable argument, but the published evidence does not establish DHI as reliably superior to well-executed FUE on survival. Surgeon skill and graft handling matter more than the instrument.' },
    { q: 'How many grafts can be done with DHI in one day?', a: 'Fewer than with conventional FUE placement, because loading implanters one graft at a time is slower. DHI suits defined areas rather than very large multi-zone sessions. Where a big area needs covering, a combined plan is usually the better answer.' },
    { q: 'Is DHI painful?', a: 'The local anaesthetic injections are the uncomfortable part, as with any hair transplant. The placement itself is not typically painful. Soreness and some swelling for a few days afterwards are normal and managed with prescribed medication.' },
    { q: 'Does DHI recover faster than FUE?', a: 'No. The donor is treated the same way, the biology is the same, and the shedding and regrowth phases follow the same course &mdash; crusting in the first week or two, shedding within a month, new growth from around three to four months, a fair assessment at ten to twelve.' },
    { q: 'Why is DHI more expensive?', a: 'Chair time and consumables. Each graft is handled and loaded individually, which takes longer, and implanter tips are single-use. You are paying for placement precision, which is worth it in a hairline and often is not across a crown.' },
    { q: 'Can DHI fix a hairline that was done badly elsewhere?', a: 'Often it can help. Softening a line that was placed too straight or too low, and adding single hairs at the correct angles between existing grafts, is exactly the situation implanter control suits. Sometimes grafts also need removing, which is assessed separately.' },
    { q: 'Can women have DHI?', a: 'Yes, and it is frequently the better choice for women, because the work is usually concentrated along a frontal line or parting and can often be done with minimal trimming. Hormonal, thyroid, iron and post-partum causes are investigated and treated before any surgery is planned.' },
    { q: 'How much does DHI cost in Gurgaon?', a: 'It depends on graft numbers, which zones are treated, whether the whole case is DHI or combined with FUE placement, and the shaving approach. We quote after assessment rather than publishing a headline price, and you get an itemised written estimate before booking.' },
    { q: 'What happens at the DHI consultation?', a: 'History and medication review, scalp and donor examination, pattern staging, photographs for your record, and a written plan &mdash; including an honest recommendation on whether DHI, FUE or a combination fits your case, with the cost difference explained.' }
  ],
  localH2: 'DHI Hair Transplant at Our Gurgaon Clinic',
  localIntro: 'Consultation, procedure and every follow-up happen at our Sector 39 clinic in Gurugram, with the same doctor placing the grafts as designed the hairline. Patients travel to us from across Gurugram and neighbouring parts of South Delhi.',
  bookH2: 'Get an Honest Answer on Whether DHI Is Worth It for You',
  bookLede: 'Bring your questions and your medication list. You will get a donor assessment, a hairline drawn on your own face, and a straight recommendation on whether DHI, FUE or a combination fits your case &mdash; including what the difference actually costs.',
  bookOptions: ['DHI hair transplant', 'DHI &mdash; hairline', 'DHI &mdash; temples', 'Correcting an earlier hairline', 'DHI or FUE &mdash; please advise'],
  notes: {
    keywords: 'dhi hair transplant in gurgaon (primary) &middot; dhi hair transplant cost gurgaon &middot; dhi vs fue &middot; unshaven dhi &middot; direct hair implantation. Primary term in title, H1, first paragraph, breadcrumb and one H2.',
    distinct: 'The stage-by-stage FUE/DHI table, the DHT-is-a-hormone correction and the unshaven-DHI caveat exist only here. Candidacy is written around zones rather than hair-loss stage, and the cost section argues against whole-case DHI &mdash; the opposite of what competitor pages do. This page could not be produced by find-and-replace on the FUE page.',
    links: '<span style="font-weight:600">Out:</span> FUE page (what-is, table and two FAQs), hair transplant hub, cost page, doctor profile, results, clinic contact. <span style="font-weight:600">In:</span> the hub&rsquo;s DHI technique card (repointed to this page in this build), the homepage treatments grid, and the planned /fue-vs-dhi-hair-transplant article, for which this page is the destination.',
    needed: 'Implanter placement and hairline photography; consented before/after hairline pairs; which implanter system is used and whether tips are single-use, so the cost rationale can be specific; the clinic&rsquo;s realistic maximum graft number for unshaven work; and Dr. Nyra&rsquo;s registration number.'
  }
};

/* ────────────────────────────────  FUT  ──────────────────────────────── */

const FUT = {
  key: 'fut',
  slug: 'fut-hair-transplant-in-gurgaon',
  navKey: 'fut',
  crumb: 'FUT hair transplant in Gurgaon',
  badge: 'FUT hair transplant in Gurgaon',
  metaTitle: 'FUT Hair Transplant in Gurgaon | DenceSpot Clinic',
  metaDesc: 'FUT (strip) hair transplant in Gurgaon, offered for selected cases. High graft yield in one session, with a linear donor scar &mdash; explained honestly before you decide.',
  h1: 'FUT Hair Transplant in Gurgaon for Advanced Loss and Limited Donor',
  lede: 'FUT removes a strip of skin from the back of the scalp, which is dissected under microscopes into individual grafts. It leaves a linear scar, and it is unfashionable for that reason. It also still produces the highest graft yield per session of any technique, which is why it remains the right answer for a specific group of patients.',
  heroImg: 'Microscopic graft dissection from a donor strip, or donor closure at review',
  heroBullets: [
    'Highest graft yield from a single session',
    'Donor hair above and below the strip is preserved',
    'Leaves one linear scar &mdash; explained before you decide',
    'Sector 39, Gurugram &middot; Mon&ndash;Sat'
  ],
  procedureName: 'FUT hair transplant (follicular unit transplantation, strip technique)',
  procedureAlt: 'Follicular unit transplantation, strip harvesting',
  howPerformed: 'A strip of hair-bearing skin is removed from the back of the scalp under local anaesthetic and the donor edges are closed. The strip is dissected under microscopes into individual follicular unit grafts, which are placed into recipient sites prepared across the thinning areas.',
  preparation: 'Clinical assessment of hair-loss pattern, donor density and scalp laxity, review of medication and blood-thinning agents, blood investigations, and a discussion of scar expectations and hair-length requirements before the procedure date.',
  followup: 'Wound review and suture or staple removal at around ten to fourteen days, then scheduled photographic reviews through shedding and regrowth, with a fuller assessment at roughly ten to twelve months.',
  trust: [
    { icon: 'chart', title: 'Highest yield per session', text: 'Where large coverage in one day is the priority.' },
    { icon: 'scope', title: 'Microscopic dissection', text: 'Grafts separated under magnification, not by eye.' },
    { icon: 'layers', title: 'Donor preserved above and below', text: 'FUE territory is left intact for future sessions.' },
    { icon: 'ruler', title: 'Scar discussed before you decide', text: 'Width, position and what it needs to stay hidden.' },
    { icon: 'question', title: 'Selected cases only', text: 'Not offered where FUE would serve you better.' }
  ],
  whatIs: {
    h2: 'What Is an FUT Hair Transplant?',
    paras: [
      'FUT stands for follicular unit transplantation, and it is usually called the strip technique. A narrow band of hair-bearing skin is taken from the back of the scalp &mdash; the area where hair is most resistant to pattern loss &mdash; and the edges are closed with sutures or staples, leaving a single line.',
      'That strip is then handed to a team who dissect it under microscopes into individual follicular units. Because every unit in the strip is accounted for and nothing is left behind in the scalp, the yield from a given area of donor skin is high, and transection rates in experienced hands are low. Those grafts are placed into recipient sites exactly as they are in FUE.',
      'The unavoidable trade-off is the scar. It is a line, not dots, and while modern closure techniques keep it narrow &mdash; trichophytic closure encourages hair to grow through the scar rather than beside it &mdash; it is permanent. It sits low at the back where surrounding hair covers it, but it needs a certain hair length above it to stay hidden. If you shave your head to the skin, FUT is the wrong operation for you.',
      'The reason FUT has not disappeared is arithmetic. FUE harvests across a wide donor area and thins it slightly everywhere; FUT takes from one band and leaves the surrounding donor untouched. For a patient facing advanced loss who will likely need more surgery later, a strip first and FUE afterwards can yield more total grafts across a lifetime than FUE alone.'
    ],
    img: 'Dissection team working under microscopes, or a healed donor line at review',
    aside: 'FUT trades a visible line for graft yield and donor preservation. Whether that trade is right for you depends on how you wear your hair and how much loss is still ahead.',
    links: [
      { href: 'fue-hair-transplant-in-gurgaon.html', label: 'How FUE differs' },
      { href: 'hair-transplant-in-gurgaon.html', label: 'Hair transplant overview' },
      { href: '#scar', label: 'About the scar' }
    ]
  },
  candidacy: {
    h2: 'Who FUT Suits &mdash; and Who It Does Not',
    lede: 'FUT is offered here for selected cases rather than as a default. These are the situations where it is genuinely the better operation, and the situations where it is not.',
    cards: [
      { icon: 'chart', title: 'Advanced loss needing volume', text: 'Where a large area needs covering and total graft yield in one session is the deciding factor rather than donor appearance.' },
      { icon: 'layers', title: 'Limited donor for FUE', text: 'Where donor density will not support wide FUE harvesting without visible thinning, a strip can yield more without spreading the loss.' },
      { icon: 'scissors', title: 'You keep your hair long', text: 'If the hair at the back of your head is worn long enough to cover a line, the scar is a non-issue in daily life.' },
      { icon: 'doc', title: 'Planning for more than one session', text: 'Taking a strip first preserves the surrounding donor for FUE later &mdash; the reverse order does not work as well.' },
      { icon: 'question', title: 'Not for shaved heads', text: 'If you shave to the skin or expect to, a linear scar will show. FUE is the right technique for you, and we will say so.' },
      { icon: 'pin', title: 'Not for poor healers', text: 'Keloid or hypertrophic scarring history, very tight scalp laxity or conditions affecting wound healing all count against a strip.' }
    ]
  },
  feature: `
  <section id="scar" style="padding:96px 0;background:#F5F4F7">
    <div style="max-width:1280px;margin:0 auto;padding:0 40px">
      <div style="max-width:720px">
        <p style="font-size:12px;font-weight:700;letter-spacing:.14em;text-transform:uppercase;color:#0B7A5E">The part most pages skip</p>
        <h2 style="margin-top:14px;font-size:40px;font-weight:800;letter-spacing:-.025em;line-height:1.1;color:#1a1147;text-wrap:balance">The Scar, Honestly</h2>
        <p style="margin-top:18px;font-size:16px;line-height:1.7;color:#3E3560">You cannot make an informed choice about FUT without a straight account of the one thing it leaves behind. Nothing below is softened.</p>
      </div>
      <div style="margin-top:40px;display:grid;grid-template-columns:1.1fr .9fr;gap:24px;align-items:start">
        <div style="display:grid;gap:16px">
          <div style="background:#fff;border:1px solid #E7E4ED;border-radius:20px;padding:28px 30px">
            <h3 style="font-size:18px;font-weight:700;color:#1a1147">It is permanent</h3>
            <p style="margin-top:8px;font-size:15px;line-height:1.7;color:#3E3560">A linear scar cannot be removed. It can be made narrower, revised, or camouflaged later with FUE grafts or scalp micropigmentation, but it does not go away. Anyone describing it as scarless is not describing FUT.</p>
          </div>
          <div style="background:#fff;border:1px solid #E7E4ED;border-radius:20px;padding:28px 30px">
            <h3 style="font-size:18px;font-weight:700;color:#1a1147">Width is not fully predictable</h3>
            <p style="margin-top:8px;font-size:15px;line-height:1.7;color:#3E3560">Closure technique matters, but so do scalp laxity, strip width, tension, your healing biology and whether you follow the activity restrictions. A fine line is the aim and the usual outcome; a wider one is a recognised possibility, not a complication that only happens to other people.</p>
          </div>
          <div style="background:#fff;border:1px solid #E7E4ED;border-radius:20px;padding:28px 30px">
            <h3 style="font-size:18px;font-weight:700;color:#1a1147">Trichophytic closure helps</h3>
            <p style="margin-top:8px;font-size:15px;line-height:1.7;color:#3E3560">The wound edge is trimmed so hair grows up through the scar line rather than stopping at it, which breaks up the appearance considerably. It improves the odds; it does not guarantee an invisible line.</p>
          </div>
          <div style="background:#fff;border:1px solid #E7E4ED;border-radius:20px;padding:28px 30px">
            <h3 style="font-size:18px;font-weight:700;color:#1a1147">It sets a minimum hair length</h3>
            <p style="margin-top:8px;font-size:15px;line-height:1.7;color:#3E3560">You will need to keep the hair at the back long enough to cover it &mdash; for most people a grade two or three, but this is judged individually. That is a commitment for life, and it is the single most common regret among people who chose a strip without thinking about it.</p>
          </div>
        </div>
        <div style="background:#1a1147;border-radius:24px;padding:36px;color:#fff;position:sticky;top:110px">
          <h3 style="font-size:20px;font-weight:700;letter-spacing:-.02em">Ask us these before agreeing to a strip</h3>
          <ul style="margin-top:22px;display:grid;gap:16px">
            <li style="font-size:14px;line-height:1.65;color:rgba(255,255,255,.78)"><span style="display:block;font-weight:700;color:#10B981">&ldquo;Why not FUE in my case?&rdquo;</span>There should be a specific reason based on your donor and your goals &mdash; not a preference for the technique.</li>
            <li style="font-size:14px;line-height:1.65;color:rgba(255,255,255,.78)"><span style="display:block;font-weight:700;color:#10B981">&ldquo;How wide is the strip going to be?&rdquo;</span>Strip width and scalp laxity together drive closure tension, which drives scar width.</li>
            <li style="font-size:14px;line-height:1.65;color:rgba(255,255,255,.78)"><span style="display:block;font-weight:700;color:#10B981">&ldquo;What hair length will hide it?&rdquo;</span>Get a specific answer before the procedure, not after.</li>
            <li style="font-size:14px;line-height:1.65;color:rgba(255,255,255,.78)"><span style="display:block;font-weight:700;color:#10B981">&ldquo;What if it heals wide?&rdquo;</span>Revision, FUE camouflage and micropigmentation are the options. Know them in advance.</li>
          </ul>
        </div>
      </div>
    </div>
  </section>
`,
  why: {
    h2: 'Why Have FUT Done Here?',
    cards: [
      { icon: 'question', title: 'Offered, not pushed', text: 'FUT is recommended only where it genuinely beats FUE for your donor and your goals. If FUE serves you better, that is what you are offered &mdash; even though a strip is quicker for us.' },
      { icon: 'ruler', title: 'Laxity measured before planning', text: 'Scalp laxity and strip width are assessed together, because closure tension is the main thing you can control that affects how the scar heals.' },
      { icon: 'scope', title: 'Microscopic dissection', text: 'Grafts are separated under magnification rather than by eye, which is what keeps transection low and yield high in a strip case.' },
      { icon: 'shield', title: 'Trichophytic closure', text: 'The wound edge is prepared so hair grows through the line rather than stopping at it, giving the scar the best chance of disappearing into the surrounding hair.' },
      { icon: 'doc', title: 'Lifetime donor planning', text: 'The strip is placed with future sessions in mind, so FUE territory above and below stays usable as the loss progresses.' },
      { icon: 'camera', title: 'Donor reviewed too', text: 'Follow-up photographs cover the donor line as well as the recipient area, so scar healing is tracked rather than assumed.' }
    ]
  },
  journey: {
    h2: 'Your FUT Journey',
    lede: 'Seven stages, in the order you will experience them.',
    steps: [
      { title: 'Consultation', text: 'History, medication review, how you wear your hair and how you expect to.' },
      { title: 'Donor &amp; laxity exam', text: 'Density, calibre and scalp laxity measured; the scar conversation happens here.' },
      { title: 'Technique decision', text: 'An explicit comparison of what FUT and FUE would each give you.' },
      { title: 'Written plan', text: 'Strip dimensions, expected yield, timeline, cost and scar expectations.' },
      { title: 'Procedure day', text: 'Strip harvest, closure, microscopic dissection and placement.' },
      { title: 'Suture removal', text: 'Wound review and suture or staple removal at around ten to fourteen days.' },
      { title: 'Reviews to 12 months', text: 'Growth and donor-line healing both tracked photographically.' }
    ]
  },
  procedure: {
    h2: 'How an FUT Procedure Works',
    lede: 'A day case under local anaesthetic. The dissection stage runs in parallel while placement begins.',
    steps: [
      { title: 'Design and consent', text: 'Hairline drawn and agreed while you sit upright, and the donor strip position and expected scar marked and shown to you before anything begins.' },
      { title: 'Strip harvest', text: 'The donor area is anaesthetised and a narrow band of hair-bearing skin is removed from the back of the scalp, sized to your laxity and the graft number planned.' },
      { title: 'Closure', text: 'The edges are closed with sutures or staples, using trichophytic technique so hair can grow up through the line. Tension is kept as low as the plan allows.' },
      { title: 'Microscopic dissection', text: 'The strip is divided under microscopes into individual follicular units, sorted by hair count and held in solution. This runs while the recipient area is prepared.' },
      { title: 'Sites and placement', text: 'Recipient sites are made at the angle and direction of the surrounding hair, and grafts are placed &mdash; single-hair units at the front, multi-hair units behind for density.' },
      { title: 'Aftercare and discharge', text: 'Donor dressed, medication and written aftercare issued, activity restrictions explained in detail, and the suture-removal appointment booked before you leave.' }
    ],
    img: 'Donor closure line immediately after the procedure, or the dissection bench',
    asideTitle: 'Specific to a strip',
    aside: [
      'Sleeping position matters &mdash; you will be told exactly how.',
      'No heavy lifting or gym for longer than after FUE.',
      'Avoid stretching the neck backwards while healing.',
      'Return at 10&ndash;14 days for suture or staple removal.',
      'Numbness behind the line for some weeks is common.'
    ]
  },
  recovery: {
    h2: 'What Happens After FUT',
    lede: 'Recipient-area growth follows the same course as FUE. The donor is where FUT recovery genuinely differs, so it is described separately here.',
    phases: [
      { label: 'Days 1&ndash;14', title: 'The donor line', text: 'Tightness, soreness and often numbness behind the closure. Sutures or staples come out at around ten to fourteen days. Activity restrictions are stricter than after FUE and they matter for scar width.' },
      { label: 'Weeks 2&ndash;4', title: 'Shedding', text: 'Transplanted hairs commonly fall while follicles stay in place. The donor line is healing but still pink and at its most conspicuous.' },
      { label: 'Months 2&ndash;4', title: 'Line settles, growth starts', text: 'The scar fades from pink towards skin tone and hair begins growing through it. New transplanted hairs start appearing, unevenly at first.' },
      { label: 'Months 5&ndash;9', title: 'Density builds', text: 'Coverage thickens and hair coarsens. Numbness behind the donor line usually resolves through this period, though it can take longer.' },
      { label: 'Months 10&ndash;12', title: 'Final assessment', text: 'A fair judgement of both the result and the scar. This is when a decision about camouflage, if any is wanted, is properly made.' }
    ],
    note: 'Individual recovery, scar width and growth vary. Scalp laxity, closure tension, healing biology and adherence to activity restrictions all affect how the donor line settles. Timelines here are general patient education and not a promise of results; no clinic can guarantee scar width or a specific density.'
  },
  results: {
    h2: 'FUT Results',
    mainTitle: 'Advanced loss, large-session coverage',
    mainMeta: 'FUT &middot; graft count to be confirmed &middot; 12-month progress',
    cards: [
      { img: 'Healed donor line at 12 months', title: 'Donor line at 12 months', meta: 'FUT &middot; trichophytic closure' },
      { img: 'Crown and mid-scalp before / after pair', title: 'Crown and mid-scalp', meta: 'FUT &middot; 12-month review' }
    ]
  },
  doctorPara: 'Why FUT is still on the menu here: FUE is easier to sell, because &ldquo;no scar&rdquo; is a simpler promise than a conversation about donor arithmetic. But a patient with advanced loss and a modest donor can be worse served by wide FUE harvesting than by a single strip that leaves the surrounding donor intact. The right question is not which technique sounds more modern &mdash; it is which one leaves you with more usable hair in fifteen years.',
  cost: {
    h2: 'FUT Hair Transplant Cost in Gurgaon',
    intro: 'FUT is often priced below FUE per graft, because harvesting a strip takes less surgeon time than extracting units one at a time. That difference should never be the reason you choose it &mdash; a technique picked on price rather than on your donor is a false economy with permanent consequences.',
    factors: [
      { title: 'Number of grafts', text: 'Yield from the strip, counted after dissection' },
      { title: 'Strip dimensions', text: 'Set by your laxity and the graft number planned' },
      { title: 'Dissection time', text: 'Microscopic separation is labour-intensive' },
      { title: 'Hair-loss stage', text: 'How much area needs coverage' },
      { title: 'Closure technique', text: 'Trichophytic closure adds time at the donor' },
      { title: 'Supporting treatment', text: 'Medical therapy or PRP running alongside' }
    ],
    caution: 'The honest comparison is not FUT against FUE on price today. It is what each leaves you with over a lifetime of continuing hair loss &mdash; total grafts available, donor appearance, and what a second or third session will still be able to draw on. We will go through that arithmetic with you rather than quoting a rate.'
  },
  faqs: [
    { q: 'What is an FUT hair transplant?', a: 'A procedure in which a narrow strip of hair-bearing skin is removed from the back of the scalp, the edges are closed, and the strip is dissected under microscopes into individual follicular unit grafts. Those grafts are placed into the thinning areas exactly as they are in FUE. It is also called the strip technique.' },
    { q: 'Does FUT leave a visible scar?', a: 'It leaves a permanent linear scar at the back of the scalp. With trichophytic closure and low closure tension it is usually a fine line that hair grows through and that surrounding hair covers, but it is not invisible and it cannot be removed. If you shave your head to the skin, it will show.' },
    { q: 'Can I shave my head after FUT?', a: 'Not to the skin, in most cases. You will need to keep the hair at the back long enough to cover the line &mdash; often around a grade two or three, judged individually. This is a lifelong commitment and the most common regret among people who chose a strip without considering it.' },
    { q: 'Is FUT outdated?', a: 'No, though it is unfashionable. FUE is better for most patients and is what most clinics now do by default. FUT still gives the highest graft yield per session and preserves the surrounding donor area, which makes it the better operation for a specific group &mdash; advanced loss, limited donor density, and patients who wear their hair long.' },
    { q: 'Which gives more grafts, FUT or FUE?', a: 'From a single session, FUT generally yields more, because every follicular unit in the strip is recovered and nothing is left behind. Over a lifetime the comparison is more interesting: a strip first, with FUE afterwards from the untouched donor above and below, can produce more total grafts than FUE alone.' },
    { q: 'Is FUT more painful than FUE?', a: 'The procedure itself is done under local anaesthetic and is not typically painful. Afterwards, the donor is different &mdash; tightness and soreness along the closure are usual, activity restrictions are stricter, and numbness behind the line is common for some weeks. Recipient-area recovery is much the same as FUE.' },
    { q: 'How long does FUT recovery take?', a: 'Sutures or staples come out at around ten to fourteen days. Most people return to desk work within a few days but avoid gym, heavy lifting and stretching the neck backwards for considerably longer than after FUE, because closure tension affects how wide the scar heals.' },
    { q: 'Can I have FUE after FUT?', a: 'Usually yes, and this order is deliberate in a lifetime plan. The donor above and below the strip is untouched and remains available for FUE later. Going the other way &mdash; wide FUE first, then a strip &mdash; works less well, because laxity and density are already reduced.' },
    { q: 'Can the FUT scar be improved later?', a: 'Yes, to a degree. Options include surgical revision of a wide scar, placing FUE grafts into the scar tissue to grow hair through it, and scalp micropigmentation to reduce the contrast. None of them removes it. Any of them is a separate procedure with its own assessment.' },
    { q: 'Who should not have FUT?', a: 'Anyone who shaves or expects to shave their head, anyone with a history of keloid or hypertrophic scarring, very tight scalp laxity, or conditions affecting wound healing. Also anyone whose donor and goals are well served by FUE &mdash; a scar you did not need is not a good trade.' },
    { q: 'When will hair grow after FUT?', a: 'The same timeline as any transplant: shedding within the first weeks while the follicles stay in place, new growth from around three to four months, and a fair assessment at roughly ten to twelve months. The donor line settles on its own schedule alongside.' },
    { q: 'How much does FUT cost in Gurgaon?', a: 'It depends on graft yield, strip dimensions, dissection time and any supporting treatment. FUT is often priced below FUE per graft, but choosing a technique on price rather than on your donor is a false economy. We quote after assessment, in writing.' },
    { q: 'What happens at the FUT consultation?', a: 'History and medication review, donor examination with density and scalp laxity measurement, pattern staging, photographs, and a written plan. The scar conversation happens here rather than on the day &mdash; position, expected width, the hair length needed to cover it and what the options are if it heals wide.' }
  ],
  localH2: 'FUT Hair Transplant at Our Gurgaon Clinic',
  localIntro: 'Consultation, procedure, suture removal and every follow-up happen at our Sector 39 clinic in Gurugram, with the same doctor throughout. Donor-line healing is reviewed alongside growth at each appointment.',
  bookH2: 'Find Out Whether a Strip Is Right for Your Donor',
  bookLede: 'Bring your questions and your medication list. You will get a donor and laxity assessment, an explicit comparison of what FUT and FUE would each give you now and in fifteen years, and a straight account of the scar before you decide anything.',
  bookOptions: ['FUT (strip) hair transplant', 'FUT &mdash; advanced hair loss', 'FUT or FUE &mdash; please advise', 'FUT scar revision or camouflage', 'Not sure &mdash; please advise'],
  noteBanner: `
        <div style="margin-top:20px;background:#fff;border:2px solid #B4453A;border-radius:20px;padding:24px 28px">
          <p style="font-size:14px;font-weight:800;color:#B4453A;letter-spacing:.02em">Blocker &mdash; do not publish until resolved</p>
          <p style="margin-top:8px;font-size:14px;line-height:1.65;color:#3E3560">The hair transplant hub badges FUT as &ldquo;Selected cases&rdquo; and its own working note still lists &ldquo;confirmation that FUT is offered&rdquo; as outstanding. This page markets a surgical procedure and must not go live until the clinic confirms in writing that FUT is performed here, by whom, and with what dissection setup. If FUT is <em>not</em> offered, do not publish: either drop the page, or convert it to an educational comparison at <code style="font-family:ui-monospace,Menlo,monospace">/fue-vs-fut-hair-transplant</code> that recommends FUE and says plainly that strip work is not done at this clinic.</p>
        </div>`,
  notes: {
    keywords: 'fut hair transplant in gurgaon (primary) &middot; strip hair transplant &middot; fut scar &middot; fut vs fue &middot; fut hair transplant cost gurgaon. Lower search volume than FUE and DHI, and rightly marked High rather than Critical in the strategy &mdash; it earns its place by capturing the comparison and scar-anxiety queries the other two pages cannot answer.',
    distinct: 'The whole scar section, the four questions to ask before agreeing to a strip, the lifetime donor arithmetic, and a recovery table written around the donor line rather than the recipient area are unique to this page. It is also the only page on the site that argues against its own procedure for most readers, which is the correct clinical position.',
    links: '<span style="font-weight:600">Out:</span> FUE page (twice &mdash; the what-is block and the candidacy card that sends shaved-head patients away), hair transplant hub, cost page, doctor profile, clinic contact. <span style="font-weight:600">In:</span> the hub&rsquo;s FUT technique card (repointed to this page in this build), and the planned /fue-vs-fut-hair-transplant article.',
    needed: 'Written confirmation that FUT is offered (see the blocker above); donor closure and dissection photography; consented before/after pairs including healed donor lines at twelve months; whether trichophytic closure is standard; the dissection team setup and microscope count; and Dr. Nyra&rsquo;s registration number.'
  }
};

/* ────────────────────────────────  build  ─────────────────────────────── */

mkdirSync('_design/technique-pages', { recursive: true });

// the artboard variant: design-system deps swapped for the font they resolve to,
// image slots given a visible placeholder, and the review widget stood down
// because the artifact canvas blocks third-party scripts
function toArtboard(html) {
  return html
    .replace(/<script type="application\/ld\+json">[\s\S]*?<\/script>\n/, '')
    .replace(
      /<link rel="stylesheet" href="_ds\/[^"]*">\n<script src="_ds\/[^"]*"><\/script>\n<script src="\.\/image-slot\.js"><\/script>/,
      '<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&display=swap">'
    )
    .replace('font-family:var(--font-sans)', "font-family:Inter,ui-sans-serif,system-ui,-apple-system,'Segoe UI',Roboto,sans-serif")
    .replace('  table { border-collapse: collapse; width: 100%; }',
`  table { border-collapse: collapse; width: 100%; }
  image-slot { display: flex; width: 100%; height: 100%; align-items: center; justify-content: center; box-sizing: border-box; padding: 18px; background: repeating-linear-gradient(135deg, #E9E6F0 0 12px, #E3E0EB 12px 24px); }
  image-slot::after { content: attr(placeholder); font-size: 12px; line-height: 1.5; font-weight: 500; color: #7E769B; text-align: center; text-wrap: balance; }`)
    .replace(/        <script src="https:\/\/elfsightcdn\.com\/platform\.js" async><\/script>\n        <div class="elfsight-app-[^"]*" data-elfsight-app-lazy><\/div>/,
`        <div style="display:grid;place-items:center;gap:10px;min-height:340px;border:1px dashed #C9C3D8;border-radius:24px;background:repeating-linear-gradient(135deg,#E9E6F0 0 12px,#E3E0EB 12px 24px);padding:32px;text-align:center">
          <p style="font-size:15px;font-weight:700;color:#5C5478">Live Google reviews &mdash; Elfsight widget</p>
          <p style="font-size:13px;line-height:1.6;color:#7E769B;max-width:420px">Renders on the live site. It cannot load inside this canvas, which blocks third-party scripts &mdash; the real widget fills this block.</p>
        </div>`);
}

for (const spec of [FUE, DHI, FUT]) {
  const html = renderPage(spec);
  writeFileSync(`${spec.slug}.html`, html);
  // FUE is the canvas entry artboard, so it is written as Main.dc.html
  const board = spec.key === 'fue' ? 'Main' : spec.key.toUpperCase();
  writeFileSync(`_design/technique-pages/${board}.dc.html`, toArtboard(html));
  const words = html.replace(/<script[\s\S]*?<\/script>/g, ' ').replace(/<style[\s\S]*?<\/style>/g, ' ')
    .replace(/<[^>]+>/g, ' ').replace(/&[a-z]+;/g, ' ').replace(/\s+/g, ' ').trim().split(' ').length;
  console.log(`${spec.slug}.html — ${Math.round(html.length / 1024)}KB, ~${words} words, ${spec.faqs.length} FAQs`);
}
