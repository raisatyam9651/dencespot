/* @ds-bundle: {"format":4,"namespace":"EthicalHealthcareCommunityDesignSystem_6ce9bd","components":[],"sourceHashes":{"ui_kits/marketing_site/Nav-Hero.jsx":"16f595ed2cf8","ui_kits/marketing_site/Sections1.jsx":"19469800ff9e","ui_kits/marketing_site/Sections2.jsx":"fb3fc3037fee","ui_kits/marketing_site/Sections3.jsx":"d5dac88e50d5"},"inlinedExternals":[],"unexposedExports":[]} */

(() => {

const __ds_ns = (window.EthicalHealthcareCommunityDesignSystem_6ce9bd = window.EthicalHealthcareCommunityDesignSystem_6ce9bd || {});

const __ds_scope = {};

(__ds_ns.__errors = __ds_ns.__errors || []);

// ui_kits/marketing_site/Nav-Hero.jsx
try { (() => {
/* global React */
const {
  useState,
  useEffect,
  useRef
} = React;

// ============== NAV ==============
function Nav() {
  const [scrolled, setScrolled] = useState(false);
  useEffect(() => {
    const on = () => setScrolled(window.scrollY > 80);
    window.addEventListener('scroll', on, {
      passive: true
    });
    return () => window.removeEventListener('scroll', on);
  }, []);
  return /*#__PURE__*/React.createElement("nav", {
    className: `fixed top-0 inset-x-0 z-40 transition-all ${scrolled ? 'py-3' : 'py-5'}`,
    style: {
      background: scrolled ? 'rgba(245,244,247,0.88)' : 'transparent',
      backdropFilter: scrolled ? 'blur(18px)' : 'none',
      borderBottom: scrolled ? '1px solid var(--line)' : '1px solid transparent'
    }
  }, /*#__PURE__*/React.createElement("div", {
    className: "container-x flex items-center justify-between"
  }, /*#__PURE__*/React.createElement("a", {
    href: "#top",
    className: "flex items-center gap-3"
  }, /*#__PURE__*/React.createElement("img", {
    src: "../../assets/logo-mark.svg",
    className: "w-10 h-10",
    alt: ""
  }), /*#__PURE__*/React.createElement("div", {
    className: "leading-tight"
  }, /*#__PURE__*/React.createElement("div", {
    style: {
      font: '800 16px/1 var(--font-sans)',
      letterSpacing: '-0.02em',
      color: 'var(--ink)'
    }
  }, "Ethical Healthcare"), /*#__PURE__*/React.createElement("div", {
    style: {
      font: '500 11px/1.2 var(--font-sans)',
      color: 'var(--ink-muted)',
      letterSpacing: '.02em',
      marginTop: 2
    }
  }, "by Nishu Sharma"))), /*#__PURE__*/React.createElement("div", {
    className: "hidden md:flex items-center gap-7"
  }, /*#__PURE__*/React.createElement("a", {
    href: "#learn",
    className: "t-sm",
    style: {
      color: 'var(--ink)'
    }
  }, "What You'll Learn"), /*#__PURE__*/React.createElement("a", {
    href: "#bonus",
    className: "t-sm",
    style: {
      color: 'var(--ink)'
    }
  }, "Bonuses"), /*#__PURE__*/React.createElement("a", {
    href: "#pricing",
    className: "t-sm",
    style: {
      color: 'var(--ink)'
    }
  }, "Pricing"), /*#__PURE__*/React.createElement("a", {
    href: "#faq",
    className: "t-sm",
    style: {
      color: 'var(--ink)'
    }
  }, "FAQ")), /*#__PURE__*/React.createElement("a", {
    href: "#webinar",
    className: "btn btn-primary btn-sm"
  }, "Join \u20B951 Webinar")));
}

// ============== COUNTDOWN ==============
function useCountdown(deadlineMs) {
  const [now, setNow] = useState(Date.now());
  useEffect(() => {
    const t = setInterval(() => setNow(Date.now()), 1000);
    return () => clearInterval(t);
  }, []);
  const d = Math.max(0, deadlineMs - now);
  return {
    days: Math.floor(d / 86400000),
    hours: Math.floor(d % 86400000 / 3600000),
    mins: Math.floor(d % 3600000 / 60000),
    secs: Math.floor(d % 60000 / 1000)
  };
}
function Countdown({
  deadline,
  label = 'Free Registration Closes In',
  dark = false
}) {
  const {
    days,
    hours,
    mins,
    secs
  } = useCountdown(deadline);
  const pairs = [[days, 'Days'], [hours, 'Hours'], [mins, 'Mins'], [secs, 'Secs']];
  const boxBg = dark ? 'rgba(255,255,255,.08)' : '#fff';
  const boxBorder = dark ? '1px solid rgba(255,255,255,.14)' : '1px solid var(--line)';
  const numCol = dark ? 'white' : 'var(--ink)';
  const lblCol = dark ? 'rgba(255,255,255,.65)' : 'var(--ink-muted)';
  const sepCol = dark ? 'rgba(255,255,255,.45)' : 'var(--purple-400)';
  return /*#__PURE__*/React.createElement("div", null, /*#__PURE__*/React.createElement("div", {
    className: "t-eyebrow",
    style: {
      color: dark ? 'rgba(255,255,255,.75)' : 'var(--purple-600)',
      marginBottom: 12,
      textAlign: 'center'
    }
  }, label), /*#__PURE__*/React.createElement("div", {
    className: "flex items-center gap-2 justify-center"
  }, pairs.map(([n, l], i) => /*#__PURE__*/React.createElement(React.Fragment, {
    key: l
  }, /*#__PURE__*/React.createElement("div", {
    style: {
      background: boxBg,
      border: boxBorder,
      borderRadius: 16,
      padding: '12px 16px',
      minWidth: 74,
      textAlign: 'center',
      boxShadow: dark ? 'none' : 'var(--shadow-xs)'
    }
  }, /*#__PURE__*/React.createElement("div", {
    style: {
      font: '800 32px/1 var(--font-sans)',
      color: numCol,
      fontVariantNumeric: 'tabular-nums'
    }
  }, String(n).padStart(2, '0')), /*#__PURE__*/React.createElement("div", {
    style: {
      font: '600 10px/1 var(--font-sans)',
      color: lblCol,
      textTransform: 'uppercase',
      letterSpacing: '.1em',
      marginTop: 6
    }
  }, l)), i < 3 && /*#__PURE__*/React.createElement("div", {
    style: {
      font: '800 28px/1 var(--font-sans)',
      color: sepCol
    }
  }, ":")))));
}

// ============== HERO (10x, for doctors/hospitals/clinics) ==============
function Hero({
  deadline
}) {
  return /*#__PURE__*/React.createElement("header", {
    id: "top",
    className: "relative pt-32 pb-16 overflow-hidden",
    style: {
      background: 'var(--canvas)'
    }
  }, /*#__PURE__*/React.createElement("div", {
    style: {
      position: 'absolute',
      left: 0,
      right: 0,
      bottom: 0,
      height: '60%',
      zIndex: 0,
      opacity: .9
    },
    className: "drift"
  }, /*#__PURE__*/React.createElement("img", {
    src: "../../assets/illustrations/path-hero.svg",
    style: {
      width: '100%',
      height: '100%',
      objectFit: 'cover'
    },
    alt: ""
  })), /*#__PURE__*/React.createElement("div", {
    style: {
      position: 'absolute',
      top: 80,
      left: '-8%',
      width: 380,
      height: 380,
      borderRadius: '50%',
      background: 'radial-gradient(circle, rgba(139,92,246,.25) 0%, transparent 70%)',
      filter: 'blur(20px)',
      zIndex: 0
    }
  }), /*#__PURE__*/React.createElement("div", {
    style: {
      position: 'absolute',
      top: 60,
      right: '-10%',
      width: 360,
      height: 360,
      borderRadius: '50%',
      background: 'radial-gradient(circle, rgba(251,191,36,.22) 0%, transparent 70%)',
      filter: 'blur(20px)',
      zIndex: 0
    }
  }), /*#__PURE__*/React.createElement("div", {
    className: "container-x relative",
    style: {
      zIndex: 1
    }
  }, /*#__PURE__*/React.createElement("div", {
    className: "flex justify-center"
  }, /*#__PURE__*/React.createElement("span", {
    className: "pill",
    style: {
      background: '#fff',
      border: '1px solid var(--line)',
      boxShadow: 'var(--shadow-sm)',
      padding: '8px 16px'
    }
  }, /*#__PURE__*/React.createElement("span", {
    style: {
      color: 'var(--purple-600)'
    }
  }, "\uD83E\uDE7A"), /*#__PURE__*/React.createElement("span", {
    style: {
      color: 'var(--ink)'
    }
  }, "For Ethical Doctors, Hospitals & Clinic Owners"), /*#__PURE__*/React.createElement("span", {
    style: {
      color: 'var(--purple-300,var(--line))'
    }
  }, "\xB7"), /*#__PURE__*/React.createElement("span", {
    style: {
      color: 'var(--purple-600)',
      fontWeight: 700
    }
  }, "Limited Free Spots"))), /*#__PURE__*/React.createElement("h1", {
    className: "t-hero t-gradient text-center mt-7",
    style: {
      maxWidth: '14ch',
      margin: '28px auto 0'
    }
  }, "Grow Your Practice ", /*#__PURE__*/React.createElement("span", {
    style: {
      position: 'relative',
      whiteSpace: 'nowrap'
    }
  }, "10\xD7", /*#__PURE__*/React.createElement("img", {
    src: "../../assets/scribble-underline.svg",
    style: {
      position: 'absolute',
      left: 0,
      bottom: '-0.14em',
      width: '100%',
      height: '0.18em'
    },
    alt: ""
  })), " \u2014 Ethically."), /*#__PURE__*/React.createElement("p", {
    className: "t-lead text-center",
    style: {
      maxWidth: '58ch',
      margin: '24px auto 0'
    }
  }, "The proven ethical growth system for ", /*#__PURE__*/React.createElement("b", {
    style: {
      color: 'var(--ink)'
    }
  }, "doctors, hospitals and clinic owners"), " \u2014 join 500+ already scaling to ", /*#__PURE__*/React.createElement("b", {
    style: {
      color: 'var(--ink)'
    }
  }, "\u20B91 Crore+ revenue"), " without pushy selling, manipulation, or sleazy tactics."), /*#__PURE__*/React.createElement("div", {
    className: "flex flex-col sm:flex-row gap-3 justify-center mt-8"
  }, /*#__PURE__*/React.createElement("a", {
    href: "#webinar",
    className: "btn btn-primary btn-lg"
  }, "Join My \u20B951 Webinar \u2192"), /*#__PURE__*/React.createElement("a", {
    href: "#bonus",
    className: "btn btn-ghost btn-lg"
  }, "See Free Bonuses")), /*#__PURE__*/React.createElement("div", {
    className: "flex justify-center items-center gap-3 mt-5"
  }, /*#__PURE__*/React.createElement(AvatarStack, null), /*#__PURE__*/React.createElement("span", {
    className: "t-sm"
  }, /*#__PURE__*/React.createElement("b", {
    style: {
      color: 'var(--ink)'
    }
  }, "500+ ethical doctors"), " already growing with us")), /*#__PURE__*/React.createElement("div", {
    className: "mt-12 flex justify-center"
  }, /*#__PURE__*/React.createElement(Countdown, {
    deadline: deadline,
    label: "Next Webinar Starts In"
  }))));
}
function AvatarStack() {
  const colors = ['#DDD6FE', '#FEF3C7', '#FBCFC1', '#A78BFA', '#fbbf24'];
  const initials = ['DR', 'KY', 'PS', 'EV', 'SN'];
  return /*#__PURE__*/React.createElement("div", {
    className: "flex -space-x-2"
  }, colors.map((c, i) => /*#__PURE__*/React.createElement("div", {
    key: i,
    style: {
      width: 34,
      height: 34,
      borderRadius: '50%',
      background: c,
      border: '2px solid #fff',
      boxShadow: 'var(--shadow-xs)',
      display: 'grid',
      placeItems: 'center',
      font: '700 11px/1 var(--font-sans)',
      color: 'var(--ink)'
    }
  }, initials[i])));
}

// ============== ₹51 WEBINAR CTA (high conversion funnel) ==============
function WebinarCTA({
  deadline
}) {
  return /*#__PURE__*/React.createElement("section", {
    id: "webinar",
    style: {
      padding: 'var(--s-9) 0'
    }
  }, /*#__PURE__*/React.createElement("div", {
    className: "container-x"
  }, /*#__PURE__*/React.createElement("div", {
    style: {
      background: 'linear-gradient(135deg, #fff 0%, #FEF3C7 100%)',
      border: '1px solid var(--gold-400)',
      borderRadius: 'var(--r-2xl)',
      padding: 'clamp(32px, 5vw, 56px)',
      boxShadow: 'var(--shadow-lg)',
      position: 'relative',
      overflow: 'hidden'
    }
  }, /*#__PURE__*/React.createElement("div", {
    style: {
      position: 'absolute',
      top: -60,
      right: -60,
      width: 240,
      height: 240,
      borderRadius: '50%',
      background: 'radial-gradient(circle, rgba(251,191,36,.5) 0%, transparent 70%)'
    }
  }), /*#__PURE__*/React.createElement("div", {
    className: "grid md:grid-cols-3 gap-10 items-center",
    style: {
      position: 'relative'
    }
  }, /*#__PURE__*/React.createElement("div", {
    className: "md:col-span-2"
  }, /*#__PURE__*/React.createElement("span", {
    className: "pill pill-gold",
    style: {
      marginBottom: 18
    }
  }, "\uD83D\uDD25 LIVE MASTERCLASS \xB7 Only \u20B951"), /*#__PURE__*/React.createElement("h2", {
    className: "t-h1",
    style: {
      color: 'var(--ink)',
      marginTop: 12,
      maxWidth: '22ch'
    }
  }, "Join my ", /*#__PURE__*/React.createElement("span", {
    style: {
      background: 'var(--grad-headline)',
      WebkitBackgroundClip: 'text',
      color: 'transparent'
    }
  }, "\u20B951 Ethical Growth Webinar"), " \u2014 walk away with the 90-day plan."), /*#__PURE__*/React.createElement("p", {
    className: "t-body",
    style: {
      marginTop: 14,
      color: 'var(--ink-soft)'
    }
  }, "90 minutes. Live with Nishu. The exact blueprint 500+ doctors have used to stop the feast-or-famine cycle \u2014 no theory, real frameworks you can implement Monday."), /*#__PURE__*/React.createElement("ul", {
    style: {
      listStyle: 'none',
      padding: 0,
      margin: '20px 0 0',
      display: 'grid',
      gridTemplateColumns: '1fr 1fr',
      gap: 10
    }
  }, ['The Revenue Architecture™ walkthrough', 'How to get your first 10 high-intent patients', 'AI tools that save 10+ hrs/week', 'Live Q&A with Nishu'].map(x => /*#__PURE__*/React.createElement("li", {
    key: x,
    style: {
      display: 'flex',
      gap: 8,
      alignItems: 'flex-start'
    }
  }, /*#__PURE__*/React.createElement("span", {
    style: {
      flexShrink: 0,
      width: 20,
      height: 20,
      borderRadius: '50%',
      background: 'var(--success)',
      display: 'grid',
      placeItems: 'center',
      marginTop: 2
    }
  }, /*#__PURE__*/React.createElement("svg", {
    viewBox: "0 0 24 24",
    fill: "none",
    stroke: "white",
    strokeWidth: "3",
    strokeLinecap: "round",
    strokeLinejoin: "round",
    width: "12",
    height: "12"
  }, /*#__PURE__*/React.createElement("polyline", {
    points: "5 12 10 17 20 7"
  }))), /*#__PURE__*/React.createElement("span", {
    className: "t-sm",
    style: {
      color: 'var(--ink)'
    }
  }, x)))), /*#__PURE__*/React.createElement("div", {
    className: "flex flex-wrap gap-3 mt-7"
  }, /*#__PURE__*/React.createElement("a", {
    href: "#pricing",
    className: "btn btn-primary btn-lg"
  }, "Reserve My \u20B951 Seat \u2192"), /*#__PURE__*/React.createElement("span", {
    className: "t-xs",
    style: {
      alignSelf: 'center'
    }
  }, "\uD83D\uDCAF Full refund if it's not a fit"))), /*#__PURE__*/React.createElement("div", null, /*#__PURE__*/React.createElement(Countdown, {
    deadline: deadline,
    label: "Doors Close In"
  }))))));
}

// ============== STATS ==============
function StatsStrip() {
  const stats = [['₹1 Cr+', 'Revenue Framework'], ['35+', 'Courses, self-paced'], ['500+', 'Ethical Doctors'], ['15+', 'Years Experience']];
  return /*#__PURE__*/React.createElement("section", {
    style: {
      padding: '0 0 var(--s-9)'
    }
  }, /*#__PURE__*/React.createElement("div", {
    className: "container-x"
  }, /*#__PURE__*/React.createElement("div", {
    className: "grid grid-cols-2 md:grid-cols-4 gap-4"
  }, stats.map(([n, l]) => /*#__PURE__*/React.createElement("div", {
    key: l,
    className: "card",
    style: {
      padding: 24,
      textAlign: 'left'
    }
  }, /*#__PURE__*/React.createElement("div", {
    style: {
      font: '900 clamp(32px,5vw,44px)/1 var(--font-sans)',
      letterSpacing: '-.035em',
      background: 'var(--grad-headline)',
      WebkitBackgroundClip: 'text',
      color: 'transparent'
    }
  }, n), /*#__PURE__*/React.createElement("div", {
    className: "t-sm",
    style: {
      marginTop: 8
    }
  }, l))))));
}

// ============== 100+ DOCTORS MONTAGE ==============
function Montage() {
  // Generate a believable grid of 60 "doctor" tiles — varied skin tones, clothes, hair
  const skin = ['#D9A17E', '#C99670', '#A87550', '#E7BFA0', '#BD8860', '#9C6B45'];
  const coat = ['#FFFFFF', '#8b5cf6', '#F57C5A', '#fbbf24', '#FFFFFF', '#A78BFA', '#FFFFFF', '#F57C5A'];
  const hair = ['#1a1147', '#3E2723', '#4A2C17', '#2A1E6B', '#1a1147', '#1a1147'];
  const bg = ['#EFEAFE', '#FEF3C7', '#FBCFC1', '#DDD6FE', '#F5F4F7', '#FEF3C7'];
  const tiles = [];
  for (let i = 0; i < 60; i++) {
    tiles.push({
      skin: skin[i % skin.length],
      coat: coat[i % coat.length],
      hair: hair[i % hair.length],
      bg: bg[i % bg.length],
      hairStyle: i % 4 // 0=short, 1=long, 2=bun, 3=short curly
    });
  }
  return /*#__PURE__*/React.createElement("section", {
    style: {
      padding: 'var(--s-10) 0',
      background: 'var(--canvas)'
    }
  }, /*#__PURE__*/React.createElement("div", {
    className: "container-x"
  }, /*#__PURE__*/React.createElement("div", {
    className: "text-center"
  }, /*#__PURE__*/React.createElement("div", {
    className: "t-eyebrow"
  }, "The Community"), /*#__PURE__*/React.createElement("h2", {
    className: "t-display t-gradient",
    style: {
      maxWidth: '18ch',
      margin: '16px auto 0'
    }
  }, "500+ ethical doctors growing together."), /*#__PURE__*/React.createElement("p", {
    className: "t-lead",
    style: {
      maxWidth: '52ch',
      margin: '18px auto 0'
    }
  }, "Surgeons, hospital owners, clinic founders \u2014 across India, Singapore, Romania and beyond. You won't grow alone.")), /*#__PURE__*/React.createElement("div", {
    style: {
      marginTop: 48,
      position: 'relative',
      borderRadius: 'var(--r-2xl)',
      overflow: 'hidden',
      background: 'linear-gradient(180deg,#FFF 0%, #FAF7F2 100%)',
      border: '1px solid var(--line)',
      padding: '32px 16px',
      boxShadow: 'var(--shadow-md)'
    }
  }, /*#__PURE__*/React.createElement("div", {
    style: {
      display: 'grid',
      gridTemplateColumns: 'repeat(auto-fill, minmax(72px, 1fr))',
      gap: 10
    }
  }, tiles.map((t, i) => /*#__PURE__*/React.createElement(DoctorTile, {
    key: i,
    t: t,
    i: i
  }))), /*#__PURE__*/React.createElement("div", {
    style: {
      position: 'absolute',
      bottom: 0,
      left: 0,
      right: 0,
      height: 80,
      background: 'linear-gradient(to top, rgba(250,247,242,1), transparent)',
      pointerEvents: 'none'
    }
  }), /*#__PURE__*/React.createElement("div", {
    style: {
      position: 'absolute',
      bottom: 22,
      left: '50%',
      transform: 'translateX(-50%)',
      background: '#fff',
      border: '1px solid var(--line)',
      borderRadius: 999,
      padding: '10px 20px',
      boxShadow: 'var(--shadow-md)',
      font: '700 14px/1 var(--font-sans)',
      color: 'var(--ink)',
      whiteSpace: 'nowrap'
    }
  }, /*#__PURE__*/React.createElement("span", {
    style: {
      background: 'var(--grad-headline)',
      WebkitBackgroundClip: 'text',
      color: 'transparent'
    }
  }, "+ 500 more"), " ethical doctors in the community"))));
}
function DoctorTile({
  t,
  i
}) {
  // Simple flat avatar: circle bg + head + torso
  return /*#__PURE__*/React.createElement("div", {
    style: {
      aspectRatio: '1',
      borderRadius: '50%',
      background: t.bg,
      position: 'relative',
      overflow: 'hidden',
      border: '2px solid #fff',
      boxShadow: '0 2px 6px rgba(26,17,71,0.08)'
    }
  }, /*#__PURE__*/React.createElement("svg", {
    viewBox: "0 0 60 60",
    width: "100%",
    height: "100%"
  }, /*#__PURE__*/React.createElement("path", {
    d: `M 8 60 Q 8 40 30 38 Q 52 40 52 60 Z`,
    fill: t.coat,
    stroke: t.coat === '#FFFFFF' ? '#1a1147' : 'none',
    strokeWidth: "1"
  }), t.coat === '#FFFFFF' && /*#__PURE__*/React.createElement(React.Fragment, null, /*#__PURE__*/React.createElement("path", {
    d: "M 22 44 Q 20 52 30 54 Q 40 52 38 44",
    fill: "none",
    stroke: "#1a1147",
    strokeWidth: "1.2"
  }), /*#__PURE__*/React.createElement("circle", {
    cx: "30",
    cy: "55",
    r: "1.6",
    fill: "#fbbf24",
    stroke: "#1a1147",
    strokeWidth: "0.6"
  })), /*#__PURE__*/React.createElement("rect", {
    x: "27",
    y: "32",
    width: "6",
    height: "6",
    fill: t.skin
  }), /*#__PURE__*/React.createElement("circle", {
    cx: "30",
    cy: "26",
    r: "11",
    fill: t.skin
  }), t.hairStyle === 0 && /*#__PURE__*/React.createElement("path", {
    d: "M 19 24 Q 20 14 30 14 Q 40 14 41 24 Q 37 18 30 18 Q 23 18 19 24",
    fill: t.hair
  }), t.hairStyle === 1 && /*#__PURE__*/React.createElement("path", {
    d: "M 17 30 Q 16 14 30 13 Q 44 14 43 30 Q 42 20 30 18 Q 18 20 17 30",
    fill: t.hair
  }), t.hairStyle === 2 && /*#__PURE__*/React.createElement(React.Fragment, null, /*#__PURE__*/React.createElement("path", {
    d: "M 20 24 Q 20 15 30 15 Q 40 15 40 24 Q 37 19 30 19 Q 23 19 20 24",
    fill: t.hair
  }), /*#__PURE__*/React.createElement("circle", {
    cx: "30",
    cy: "11",
    r: "4",
    fill: t.hair
  })), t.hairStyle === 3 && /*#__PURE__*/React.createElement("path", {
    d: "M 19 23 Q 22 13 30 13 Q 38 13 41 23 Q 38 20 34 21 Q 30 18 26 21 Q 22 20 19 23",
    fill: t.hair
  })));
}
Object.assign(window, {
  Nav,
  Hero,
  StatsStrip,
  Countdown,
  WebinarCTA,
  Montage
});
})(); } catch (e) { __ds_ns.__errors.push({ path: "ui_kits/marketing_site/Nav-Hero.jsx", error: String((e && e.message) || e) }); }

// ui_kits/marketing_site/Sections1.jsx
try { (() => {
function _extends() { return _extends = Object.assign ? Object.assign.bind() : function (n) { for (var e = 1; e < arguments.length; e++) { var t = arguments[e]; for (var r in t) ({}).hasOwnProperty.call(t, r) && (n[r] = t[r]); } return n; }, _extends.apply(null, arguments); }
/* global React */

// ============== BONUS STACK ==============
function Bonuses() {
  const bonuses = [{
    tag: 'BONUS 01',
    value: '₹4,999 Value',
    title: 'Free access to Ethical Healthcare Community',
    body: 'Lifetime inside the private community of 500+ ethical doctors. Weekly calls, shared wins, direct messaging with Nishu.',
    icon: 'users',
    tint: 'purple'
  }, {
    tag: 'BONUS 02',
    value: '₹49,999 Value',
    title: '20 AI Tools Built for Healthcare Providers',
    body: 'Patient follow-up bots, consultation script generators, content engines, review responders — built by us, for doctors only. 1-year full access.',
    icon: 'sparkles',
    tint: 'gold'
  }, {
    tag: 'BONUS 03',
    value: '₹9,999 Value',
    title: 'The Patient Flow Audit™ for Your Practice',
    body: 'Personal 1-page audit of where patients are leaking out of your current funnel, with 3 specific fixes. Done-for-you by our team.',
    icon: 'clipboard',
    tint: 'coral'
  }, {
    tag: 'BONUS 04',
    value: '₹7,499 Value',
    title: 'The Revenue Architecture™ Playbook (PDF)',
    body: 'The 90-day week-by-week plan to go from ₹3L → ₹1 Cr. Printable. Implementation checklists, scripts, and KPI dashboards included.',
    icon: 'book',
    tint: 'purple'
  }, {
    tag: 'BONUS 05',
    value: '₹5,999 Value',
    title: 'Doctor Positioning Framework Toolkit',
    body: 'Bio templates, LinkedIn banner generator, clinic one-pager, and YouTube thumbnail starter pack. Customised for ethical positioning.',
    icon: 'award',
    tint: 'gold'
  }];
  const total = '₹78,495+ Value';
  return /*#__PURE__*/React.createElement("section", {
    id: "bonus",
    style: {
      padding: 'var(--s-10) 0',
      background: 'var(--canvas-warm)',
      position: 'relative',
      overflow: 'hidden'
    }
  }, /*#__PURE__*/React.createElement("div", {
    style: {
      position: 'absolute',
      top: 0,
      right: 0,
      width: 420,
      height: 420,
      borderRadius: '50%',
      background: 'radial-gradient(circle, rgba(251,191,36,.15) 0%, transparent 70%)',
      filter: 'blur(30px)'
    }
  }), /*#__PURE__*/React.createElement("div", {
    className: "container-x",
    style: {
      position: 'relative'
    }
  }, /*#__PURE__*/React.createElement("div", {
    className: "text-center"
  }, /*#__PURE__*/React.createElement("span", {
    className: "pill pill-gold"
  }, "5 BONUSES \xB7 When You Register Today"), /*#__PURE__*/React.createElement("h2", {
    className: "t-display t-gradient",
    style: {
      maxWidth: '18ch',
      margin: '16px auto 0'
    }
  }, "Free bonuses worth ", total), /*#__PURE__*/React.createElement("p", {
    className: "t-lead",
    style: {
      maxWidth: '52ch',
      margin: '18px auto 0'
    }
  }, "Register for the \u20B951 webinar, stay for the bonuses. Everything below is included \u2014 for doctors, hospitals, and clinic owners only.")), /*#__PURE__*/React.createElement("div", {
    className: "grid md:grid-cols-2 gap-5 mt-14"
  }, bonuses.map((b, i) => /*#__PURE__*/React.createElement(BonusCard, _extends({
    key: i
  }, b, {
    large: i === 0 || i === 1
  })))), /*#__PURE__*/React.createElement("div", {
    style: {
      marginTop: 40,
      padding: '28px 32px',
      background: 'linear-gradient(135deg, #1a1147 0%, #7C3AED 100%)',
      color: 'white',
      borderRadius: 'var(--r-xl)',
      display: 'flex',
      flexWrap: 'wrap',
      alignItems: 'center',
      justifyContent: 'space-between',
      gap: 20,
      boxShadow: 'var(--shadow-lg)'
    }
  }, /*#__PURE__*/React.createElement("div", null, /*#__PURE__*/React.createElement("div", {
    style: {
      font: '600 13px/1 var(--font-sans)',
      color: 'rgba(255,255,255,.7)',
      textTransform: 'uppercase',
      letterSpacing: '.14em'
    }
  }, "Total Bonus Value"), /*#__PURE__*/React.createElement("div", {
    style: {
      font: '900 clamp(32px,4vw,44px)/1 var(--font-sans)',
      letterSpacing: '-.03em',
      marginTop: 8
    }
  }, total, " \u2014 Yours Free"), /*#__PURE__*/React.createElement("div", {
    style: {
      font: '500 14px/1.4 var(--font-sans)',
      color: 'rgba(255,255,255,.8)',
      marginTop: 6
    }
  }, "When you join the \u20B951 Ethical Growth Webinar")), /*#__PURE__*/React.createElement("a", {
    href: "#pricing",
    className: "btn btn-gold btn-lg"
  }, "Claim All Bonuses \u2192"))));
}
function BonusCard({
  tag,
  value,
  title,
  body,
  icon,
  tint,
  large
}) {
  const tints = {
    purple: {
      bg: 'var(--purple-100)',
      fg: 'var(--purple-600)',
      badge: 'var(--purple-500)'
    },
    gold: {
      bg: 'var(--gold-100)',
      fg: 'var(--gold-600)',
      badge: 'var(--gold-500)'
    },
    coral: {
      bg: 'var(--coral-200)',
      fg: '#9C3B20',
      badge: '#F57C5A'
    }
  }[tint];
  return /*#__PURE__*/React.createElement("div", {
    className: "card",
    style: {
      padding: 32,
      display: 'flex',
      flexDirection: 'column',
      gap: 16,
      position: 'relative',
      overflow: 'hidden'
    }
  }, /*#__PURE__*/React.createElement("div", {
    style: {
      position: 'absolute',
      top: -30,
      right: -30,
      width: 160,
      height: 160,
      borderRadius: '50%',
      background: tints.bg,
      opacity: .55
    }
  }), /*#__PURE__*/React.createElement("div", {
    style: {
      position: 'relative',
      display: 'flex',
      alignItems: 'center',
      justifyContent: 'space-between',
      gap: 12,
      zIndex: 2
    }
  }, /*#__PURE__*/React.createElement("span", {
    style: {
      font: '700 12px/1 var(--font-sans)',
      color: tints.fg,
      letterSpacing: '.14em',
      textTransform: 'uppercase'
    }
  }, tag), /*#__PURE__*/React.createElement("span", {
    style: {
      background: tints.badge,
      color: 'white',
      padding: '6px 12px',
      borderRadius: 999,
      font: '800 12px/1 var(--font-sans)',
      letterSpacing: '.02em',
      whiteSpace: 'nowrap',
      position: 'relative',
      zIndex: 2
    }
  }, value)), /*#__PURE__*/React.createElement(BonusIcon, {
    name: icon,
    tint: tints
  }), /*#__PURE__*/React.createElement("div", {
    className: "t-h3",
    style: {
      position: 'relative'
    }
  }, title), /*#__PURE__*/React.createElement("div", {
    className: "t-body",
    style: {
      position: 'relative',
      fontSize: 15,
      marginTop: -6
    }
  }, body), /*#__PURE__*/React.createElement("div", {
    style: {
      position: 'relative',
      display: 'flex',
      alignItems: 'center',
      gap: 8,
      color: 'var(--success)',
      font: '700 13px/1 var(--font-sans)',
      marginTop: 4
    }
  }, /*#__PURE__*/React.createElement("svg", {
    viewBox: "0 0 24 24",
    fill: "none",
    stroke: "currentColor",
    strokeWidth: "2.5",
    strokeLinecap: "round",
    strokeLinejoin: "round",
    width: "16",
    height: "16"
  }, /*#__PURE__*/React.createElement("polyline", {
    points: "5 12 10 17 20 7"
  })), "Included FREE with the webinar"));
}
function BonusIcon({
  name,
  tint
}) {
  const paths = {
    users: /*#__PURE__*/React.createElement("path", {
      d: "M17 20h5v-2a4 4 0 0 0-3-3.87M9 20H4v-2a4 4 0 0 1 3-3.87M13 7a4 4 0 1 1-8 0 4 4 0 0 1 8 0zm7 3a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"
    }),
    sparkles: /*#__PURE__*/React.createElement("path", {
      d: "M12 3v4M12 17v4M3 12h4M17 12h4M5.6 5.6l2.8 2.8M15.6 15.6l2.8 2.8M5.6 18.4l2.8-2.8M15.6 8.4l2.8-2.8"
    }),
    clipboard: /*#__PURE__*/React.createElement("path", {
      d: "M9 4h6a1 1 0 0 1 1 1v1h2a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h2V5a1 1 0 0 1 1-1zM9 4v3h6V4M8 14h8M8 18h5"
    }),
    book: /*#__PURE__*/React.createElement("path", {
      d: "M4 5a2 2 0 0 1 2-2h11a2 2 0 0 1 2 2v14l-6-3-6 3V5a2 2 0 0 0-3 0zM9 7h6"
    }),
    award: /*#__PURE__*/React.createElement("path", {
      d: "M12 2l3 6 6 .5-4.5 4 1.5 6.5L12 16l-6 3 1.5-6.5L3 8.5 9 8z"
    })
  };
  return /*#__PURE__*/React.createElement("div", {
    style: {
      width: 56,
      height: 56,
      borderRadius: 16,
      background: tint.bg,
      color: tint.fg,
      display: 'grid',
      placeItems: 'center',
      position: 'relative'
    }
  }, /*#__PURE__*/React.createElement("svg", {
    fill: "none",
    stroke: "currentColor",
    strokeWidth: "1.75",
    strokeLinecap: "round",
    strokeLinejoin: "round",
    viewBox: "0 0 24 24",
    width: "28",
    height: "28"
  }, paths[name]));
}

// ============== WHAT YOU'LL LEARN ==============
function WhatYoullLearn() {
  const items = [{
    icon: 'users',
    title: 'Fix unpredictable patient flow',
    body: 'Replace feast-or-famine with a predictable acquisition system.'
  }, {
    icon: 'heart',
    title: 'Heal more patients — without pushy selling',
    body: 'Trust-based conversations that convert, never coerce.'
  }, {
    icon: 'sparkles',
    title: 'Attract high-quality patients with AI',
    body: 'Automate outreach and follow-up without losing your voice.'
  }, {
    icon: 'shield',
    title: 'Become the trusted authority in your niche',
    body: 'Patients choose you first — before they compare prices.'
  }, {
    icon: 'calendar',
    title: 'The exact 90-day plan to 7 figures',
    body: 'A week-by-week path from ₹3L to ₹1 Crore, ethically.'
  }, {
    icon: 'trending',
    title: 'Predictable revenue — no pressure, no panic',
    body: 'No more "some months are great, some are silent."'
  }];
  return /*#__PURE__*/React.createElement("section", {
    id: "learn",
    style: {
      padding: 'var(--s-10) 0'
    }
  }, /*#__PURE__*/React.createElement("div", {
    className: "container-x"
  }, /*#__PURE__*/React.createElement("div", {
    className: "text-center"
  }, /*#__PURE__*/React.createElement("div", {
    className: "t-eyebrow"
  }, "What You'll Learn"), /*#__PURE__*/React.createElement("h2", {
    className: "t-display t-gradient",
    style: {
      maxWidth: '16ch',
      margin: '16px auto 0'
    }
  }, "Everything you need to grow, without losing your integrity.")), /*#__PURE__*/React.createElement("div", {
    className: "grid md:grid-cols-2 lg:grid-cols-3 gap-5 mt-14"
  }, items.map((it, i) => /*#__PURE__*/React.createElement(LearnCard, _extends({
    key: i
  }, it))))));
}
function LearnCard({
  icon,
  title,
  body
}) {
  return /*#__PURE__*/React.createElement("div", {
    className: "card"
  }, /*#__PURE__*/React.createElement(FeatureIcon, {
    name: icon
  }), /*#__PURE__*/React.createElement("div", {
    className: "t-h3",
    style: {
      marginTop: 20
    }
  }, title), /*#__PURE__*/React.createElement("div", {
    className: "t-body",
    style: {
      marginTop: 10,
      fontSize: 15
    }
  }, body));
}
function FeatureIcon({
  name
}) {
  const paths = {
    users: /*#__PURE__*/React.createElement("path", {
      d: "M17 20h5v-2a4 4 0 0 0-3-3.87M9 20H4v-2a4 4 0 0 1 3-3.87M13 7a4 4 0 1 1-8 0 4 4 0 0 1 8 0zm7 3a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"
    }),
    heart: /*#__PURE__*/React.createElement("path", {
      d: "M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78L12 21.23l8.84-8.84a5.5 5.5 0 0 0 0-7.78z"
    }),
    sparkles: /*#__PURE__*/React.createElement("path", {
      d: "M12 3v4M12 17v4M3 12h4M17 12h4M5.6 5.6l2.8 2.8M15.6 15.6l2.8 2.8M5.6 18.4l2.8-2.8M15.6 8.4l2.8-2.8"
    }),
    shield: /*#__PURE__*/React.createElement("path", {
      d: "M12 3l8 3v6c0 5-3.5 8-8 9-4.5-1-8-4-8-9V6l8-3z M9 12l2 2 4-4"
    }),
    calendar: /*#__PURE__*/React.createElement("path", {
      d: "M3 8h18M3 8l1-4h16l1 4M3 8v11a1 1 0 0 0 1 1h16a1 1 0 0 0 1-1V8M8 3v4M16 3v4M9 14l2 2 4-4"
    }),
    trending: /*#__PURE__*/React.createElement("path", {
      d: "M3 17l6-6 4 4 7-7M14 7h7v7"
    })
  };
  return /*#__PURE__*/React.createElement("div", {
    style: {
      width: 52,
      height: 52,
      borderRadius: 16,
      background: 'var(--purple-100)',
      color: 'var(--purple-600)',
      display: 'grid',
      placeItems: 'center'
    }
  }, /*#__PURE__*/React.createElement("svg", {
    fill: "none",
    stroke: "currentColor",
    strokeWidth: "1.75",
    strokeLinecap: "round",
    strokeLinejoin: "round",
    viewBox: "0 0 24 24",
    width: "26",
    height: "26"
  }, paths[name]));
}

// ============== EXCLUSIVE BENEFITS ==============
function Benefits() {
  const rows = [{
    n: '01',
    title: 'The most important info in the industry',
    bullets: ['4 membership levels', '35+ courses', 'Self-paced learning', 'Latest trends + strategies'],
    warm: false
  }, {
    n: '02',
    title: 'Build systems with ease & AI',
    bullets: ['Doctor Positioning Framework', 'Content that builds trust (not cringe)', 'Follow-up systems that don\'t feel pushy', 'Monthly Growth Dashboard'],
    warm: true
  }, {
    n: '03',
    title: 'Create predictable revenue, without the panic',
    bullets: ['Revenue Architecture™ System', 'Offer structuring for doctors', 'Trust-based follow-up', 'Monthly growth tracking'],
    warm: false
  }, {
    n: '04',
    title: 'Understand why patients don\'t convert',
    bullets: ['Patient Flow Audit™ Framework', 'Consultation Conversion Scripts', 'Front Desk Optimization', 'Trust-Based Communication'],
    warm: true
  }];
  return /*#__PURE__*/React.createElement("section", {
    id: "benefits",
    style: {
      padding: 'var(--s-10) 0',
      background: 'var(--canvas)'
    }
  }, /*#__PURE__*/React.createElement("div", {
    className: "container-x"
  }, /*#__PURE__*/React.createElement("div", {
    className: "text-center"
  }, /*#__PURE__*/React.createElement("div", {
    className: "t-eyebrow"
  }, "Exclusive Benefits"), /*#__PURE__*/React.createElement("h2", {
    className: "t-display t-gradient",
    style: {
      maxWidth: '18ch',
      margin: '16px auto 0'
    }
  }, "What you actually get inside the community."), /*#__PURE__*/React.createElement("p", {
    className: "t-lead",
    style: {
      maxWidth: '56ch',
      margin: '16px auto 0'
    }
  }, "Built for doctors, hospitals, and clinic owners \u2014 not marketers.")), /*#__PURE__*/React.createElement("div", {
    className: "grid md:grid-cols-2 gap-6 mt-14"
  }, rows.map(r => /*#__PURE__*/React.createElement(BenefitCard, _extends({
    key: r.n
  }, r)))), /*#__PURE__*/React.createElement("div", {
    className: "flex justify-center mt-10"
  }, /*#__PURE__*/React.createElement("a", {
    href: "#webinar",
    className: "btn btn-primary btn-lg"
  }, "Join the \u20B951 Webinar \u2192"))));
}
function BenefitCard({
  n,
  title,
  bullets,
  warm
}) {
  const accent = warm ? 'var(--gold-500)' : 'var(--purple-500)';
  const soft = warm ? 'var(--gold-100)' : 'var(--purple-100)';
  return /*#__PURE__*/React.createElement("div", {
    className: "card",
    style: {
      padding: 36,
      position: 'relative',
      overflow: 'hidden'
    }
  }, /*#__PURE__*/React.createElement("div", {
    style: {
      position: 'absolute',
      top: -20,
      right: -20,
      width: 120,
      height: 120,
      borderRadius: '50%',
      background: soft,
      opacity: .6
    }
  }), /*#__PURE__*/React.createElement("div", {
    style: {
      position: 'relative'
    }
  }, /*#__PURE__*/React.createElement("div", {
    style: {
      display: 'inline-flex',
      alignItems: 'center',
      gap: 10,
      color: accent,
      font: '700 13px/1 var(--font-sans)',
      letterSpacing: '.14em',
      textTransform: 'uppercase'
    }
  }, /*#__PURE__*/React.createElement("span", {
    style: {
      width: 24,
      height: 24,
      borderRadius: '50%',
      background: accent,
      color: 'white',
      display: 'grid',
      placeItems: 'center',
      font: '800 11px/1 var(--font-sans)'
    }
  }, n), "Pillar"), /*#__PURE__*/React.createElement("div", {
    className: "t-h2",
    style: {
      marginTop: 14,
      fontSize: 26
    }
  }, title), /*#__PURE__*/React.createElement("ul", {
    style: {
      listStyle: 'none',
      padding: 0,
      margin: '18px 0 0',
      display: 'flex',
      flexDirection: 'column',
      gap: 10
    }
  }, bullets.map(b => /*#__PURE__*/React.createElement("li", {
    key: b,
    style: {
      display: 'flex',
      gap: 10,
      alignItems: 'flex-start'
    }
  }, /*#__PURE__*/React.createElement("span", {
    style: {
      flexShrink: 0,
      width: 20,
      height: 20,
      borderRadius: '50%',
      background: 'var(--success)',
      display: 'grid',
      placeItems: 'center',
      marginTop: 2
    }
  }, /*#__PURE__*/React.createElement("svg", {
    viewBox: "0 0 24 24",
    fill: "none",
    stroke: "white",
    strokeWidth: "3",
    strokeLinecap: "round",
    strokeLinejoin: "round",
    width: "12",
    height: "12"
  }, /*#__PURE__*/React.createElement("polyline", {
    points: "5 12 10 17 20 7"
  }))), /*#__PURE__*/React.createElement("span", {
    className: "t-body",
    style: {
      margin: 0,
      color: 'var(--ink-soft)',
      fontSize: 15
    }
  }, b))))));
}

// ============== CURRICULUM CHIPS ==============
function Curriculum() {
  const topics = ['Ethical Growth', 'Authority Positioning', 'Brand Building', 'Revenue Foundations', 'YouTube Growth', 'Sales Systems', 'AI Systems', 'Team Building', 'Organic Marketing', 'Leadership Skills', 'Paid Advertising', 'Content Creation', 'Lead Generation', 'Community Building', 'Patient Conversion', 'AI Agents'];
  return /*#__PURE__*/React.createElement("section", {
    style: {
      padding: 'var(--s-10) 0',
      background: 'var(--canvas-warm)'
    }
  }, /*#__PURE__*/React.createElement("div", {
    className: "container-x"
  }, /*#__PURE__*/React.createElement("div", {
    className: "text-center"
  }, /*#__PURE__*/React.createElement("div", {
    className: "t-eyebrow"
  }, "Comprehensive Curriculum"), /*#__PURE__*/React.createElement("h2", {
    className: "t-display t-gradient",
    style: {
      maxWidth: '16ch',
      margin: '16px auto 0'
    }
  }, "Every topic you need \u2014 in one place.")), /*#__PURE__*/React.createElement("div", {
    className: "flex flex-wrap gap-3 justify-center mt-12",
    style: {
      maxWidth: 900,
      margin: '48px auto 0'
    }
  }, topics.map((t, i) => /*#__PURE__*/React.createElement("span", {
    key: t,
    className: "pill",
    style: {
      background: i % 3 === 0 ? 'var(--purple-100)' : i % 3 === 1 ? 'var(--gold-100)' : '#fff',
      color: i % 3 === 0 ? 'var(--purple-700)' : i % 3 === 1 ? 'var(--gold-600)' : 'var(--ink)',
      border: i % 3 === 2 ? '1px solid var(--line)' : 'none',
      fontSize: 14,
      padding: '10px 18px'
    }
  }, t)))));
}
Object.assign(window, {
  WhatYoullLearn,
  Benefits,
  Curriculum,
  Bonuses
});
})(); } catch (e) { __ds_ns.__errors.push({ path: "ui_kits/marketing_site/Sections1.jsx", error: String((e && e.message) || e) }); }

// ui_kits/marketing_site/Sections2.jsx
try { (() => {
function _extends() { return _extends = Object.assign ? Object.assign.bind() : function (n) { for (var e = 1; e < arguments.length; e++) { var t = arguments[e]; for (var r in t) ({}).hasOwnProperty.call(t, r) && (n[r] = t[r]); } return n; }, _extends.apply(null, arguments); }
/* global React */

// ============== FOUNDER / WHY JOIN ==============
function Founder() {
  const badges = ['Ethical Healthcare Growth Systems', 'Proven ₹1 Crore Growth Framework', 'AI & Automation Driven Strategies', 'Real Implementation, Not Theory', 'Built for Doctors, Not Marketers', 'Community of Growth-Focused Ethical Doctors'];
  return /*#__PURE__*/React.createElement("section", {
    style: {
      padding: 'var(--s-10) 0',
      background: 'var(--canvas)'
    }
  }, /*#__PURE__*/React.createElement("div", {
    className: "container-x"
  }, /*#__PURE__*/React.createElement("div", {
    className: "grid lg:grid-cols-5 gap-10 items-center"
  }, /*#__PURE__*/React.createElement("div", {
    className: "lg:col-span-2 relative"
  }, /*#__PURE__*/React.createElement("div", {
    style: {
      position: 'relative',
      borderRadius: 'var(--r-2xl)',
      overflow: 'hidden',
      background: 'var(--purple-100)',
      aspectRatio: '4/5',
      boxShadow: 'var(--shadow-lg)'
    }
  }, /*#__PURE__*/React.createElement("div", {
    style: {
      position: 'absolute',
      inset: 0,
      background: 'linear-gradient(135deg, #DDD6FE 0%, #FEF3C7 60%, #FBCFC1 100%)'
    }
  }), /*#__PURE__*/React.createElement("div", {
    style: {
      position: 'absolute',
      bottom: 0,
      left: '50%',
      transform: 'translateX(-50%)',
      width: '75%'
    }
  }, /*#__PURE__*/React.createElement("svg", {
    viewBox: "0 0 220 280",
    width: "100%"
  }, /*#__PURE__*/React.createElement("defs", null, /*#__PURE__*/React.createElement("linearGradient", {
    id: "skin",
    x1: "0",
    y1: "0",
    x2: "0",
    y2: "1"
  }, /*#__PURE__*/React.createElement("stop", {
    offset: "0",
    stopColor: "#D9A17E"
  }), /*#__PURE__*/React.createElement("stop", {
    offset: "1",
    stopColor: "#B5825E"
  }))), /*#__PURE__*/React.createElement("ellipse", {
    cx: "110",
    cy: "280",
    rx: "110",
    ry: "80",
    fill: "#1a1147"
  }), /*#__PURE__*/React.createElement("path", {
    d: "M40 280 Q 40 180 110 180 Q 180 180 180 280 Z",
    fill: "#8b5cf6"
  }), /*#__PURE__*/React.createElement("path", {
    d: "M70 200 Q 70 170 110 170 Q 150 170 150 200 Q 130 220 110 220 Q 90 220 70 200",
    fill: "url(#skin)"
  }), /*#__PURE__*/React.createElement("ellipse", {
    cx: "110",
    cy: "130",
    rx: "50",
    ry: "56",
    fill: "url(#skin)"
  }), /*#__PURE__*/React.createElement("path", {
    d: "M60 130 Q 60 70 110 70 Q 165 70 164 130 Q 150 90 110 86 Q 74 90 60 130 Z",
    fill: "#1a1147"
  }), /*#__PURE__*/React.createElement("path", {
    d: "M55 140 Q 40 200 60 240",
    fill: "#1a1147"
  }), /*#__PURE__*/React.createElement("path", {
    d: "M165 140 Q 180 200 160 240",
    fill: "#1a1147"
  }))), /*#__PURE__*/React.createElement("div", {
    style: {
      position: 'absolute',
      top: 16,
      left: 16,
      background: 'rgba(255,255,255,.9)',
      backdropFilter: 'blur(10px)',
      padding: '8px 14px',
      borderRadius: 999,
      font: '600 12px/1 var(--font-sans)',
      color: 'var(--ink)'
    }
  }, "Nishu Sharma")), /*#__PURE__*/React.createElement("div", {
    style: {
      position: 'absolute',
      bottom: -24,
      right: -16,
      background: 'var(--grad-gold)',
      padding: '16px 20px',
      borderRadius: 20,
      boxShadow: 'var(--shadow-glow-gold)'
    }
  }, /*#__PURE__*/React.createElement("div", {
    style: {
      font: '900 28px/1 var(--font-sans)',
      color: 'var(--ink)',
      letterSpacing: '-.02em'
    }
  }, "15+ yrs"), /*#__PURE__*/React.createElement("div", {
    style: {
      font: '600 11px/1 var(--font-sans)',
      color: 'var(--ink)',
      textTransform: 'uppercase',
      letterSpacing: '.1em',
      marginTop: 4
    }
  }, "Healthcare + Growth"))), /*#__PURE__*/React.createElement("div", {
    className: "lg:col-span-3"
  }, /*#__PURE__*/React.createElement("div", {
    className: "t-eyebrow"
  }, "Why Join This Community"), /*#__PURE__*/React.createElement("h2", {
    className: "t-display t-gradient",
    style: {
      marginTop: 16,
      maxWidth: '18ch'
    }
  }, "Built from losing my own mother to a money-pushy system."), /*#__PURE__*/React.createElement("p", {
    className: "t-lead",
    style: {
      marginTop: 24
    }
  }, "I've spent 15+ years in healthcare and digital growth. I've worked closely with doctors, hospital owners, and clinic founders across India \u2014 and helped build ", /*#__PURE__*/React.createElement("b", {
    style: {
      color: 'var(--ink)'
    }
  }, "500+ success stories"), " through trust, systems, and modern marketing."), /*#__PURE__*/React.createElement("p", {
    className: "t-body",
    style: {
      marginTop: 16
    }
  }, "My mission is to train ", /*#__PURE__*/React.createElement("b", {
    style: {
      color: 'var(--ink)'
    }
  }, "1 lakh ethical doctors"), " to grow their practice without becoming someone they're not. This community is the path."), /*#__PURE__*/React.createElement("div", {
    className: "grid sm:grid-cols-2 gap-2 mt-8"
  }, badges.map(b => /*#__PURE__*/React.createElement("div", {
    key: b,
    style: {
      display: 'flex',
      alignItems: 'center',
      gap: 10
    }
  }, /*#__PURE__*/React.createElement("span", {
    style: {
      width: 22,
      height: 22,
      borderRadius: '50%',
      background: 'var(--success)',
      display: 'grid',
      placeItems: 'center',
      flexShrink: 0
    }
  }, /*#__PURE__*/React.createElement("svg", {
    viewBox: "0 0 24 24",
    fill: "none",
    stroke: "white",
    strokeWidth: "3",
    strokeLinecap: "round",
    strokeLinejoin: "round",
    width: "13",
    height: "13"
  }, /*#__PURE__*/React.createElement("polyline", {
    points: "5 12 10 17 20 7"
  }))), /*#__PURE__*/React.createElement("span", {
    className: "t-sm",
    style: {
      color: 'var(--ink)'
    }
  }, b)))), /*#__PURE__*/React.createElement("div", {
    style: {
      marginTop: 32,
      paddingTop: 24,
      borderTop: '1px solid var(--line)',
      display: 'flex',
      alignItems: 'center',
      gap: 20
    }
  }, /*#__PURE__*/React.createElement("div", null, /*#__PURE__*/React.createElement("div", {
    className: "t-script",
    style: {
      fontSize: 42,
      lineHeight: 1,
      color: 'var(--ink)'
    }
  }, "Nishu Sharma"), /*#__PURE__*/React.createElement("div", {
    className: "t-xs",
    style: {
      marginTop: 4,
      textTransform: 'uppercase',
      letterSpacing: '.08em'
    }
  }, "Founder \xB7 Ethical Healthcare Community")), /*#__PURE__*/React.createElement("a", {
    href: "#pricing",
    className: "btn btn-primary",
    style: {
      marginLeft: 'auto'
    }
  }, "Join Us Now \u2192"))))));
}

// ============== TESTIMONIALS ==============
function Testimonials() {
  const items = [{
    quote: 'After 18 years in practice, I realized clinical excellence alone isn\'t enough today… visibility matters. For the first time, growth didn\'t feel like guesswork. This is the kind of change our healthcare system truly needs.',
    name: 'Dr. P L Suresh',
    role: 'Sr Consultant, Maxillofacial Surgeon',
    where: 'India',
    initials: 'PS',
    tint: 'purple'
  }, {
    quote: 'Nishu is an exceptional orator and a truly world-class trainer. She has the rare ability to communicate complex ideas with absolute clarity and conviction. A leader with vision and impact.',
    name: 'Ke Siong Yeo',
    role: 'Sr Manager, Bright Vision Hospital',
    where: 'Singapore',
    initials: 'KY',
    tint: 'gold'
  }, {
    quote: 'I discovered an ethical way of attracting patients — one that aligns with my values and still creates real growth. Her approach feels revolutionary.',
    name: 'Evelin Voigt',
    role: 'Purpose-Driven Leader',
    where: 'Romania',
    initials: 'EV',
    tint: 'coral'
  }];
  return /*#__PURE__*/React.createElement("section", {
    style: {
      padding: 'var(--s-10) 0',
      background: 'var(--canvas-warm)'
    }
  }, /*#__PURE__*/React.createElement("div", {
    className: "container-x"
  }, /*#__PURE__*/React.createElement("div", {
    className: "text-center"
  }, /*#__PURE__*/React.createElement("div", {
    className: "t-eyebrow"
  }, "Success Stories"), /*#__PURE__*/React.createElement("h2", {
    className: "t-display t-gradient",
    style: {
      maxWidth: '16ch',
      margin: '16px auto 0'
    }
  }, "Trusted by ethical healthcare leaders.")), /*#__PURE__*/React.createElement("div", {
    className: "grid md:grid-cols-3 gap-5 mt-14"
  }, items.map((t, i) => /*#__PURE__*/React.createElement(TestimonialCard, _extends({
    key: i
  }, t))))));
}
function TestimonialCard({
  quote,
  name,
  role,
  where,
  initials,
  tint
}) {
  const tints = {
    purple: {
      bg: 'var(--purple-100)',
      fg: 'var(--purple-700)'
    },
    gold: {
      bg: 'var(--gold-100)',
      fg: 'var(--gold-600)'
    },
    coral: {
      bg: 'var(--coral-200)',
      fg: '#9C3B20'
    }
  }[tint];
  return /*#__PURE__*/React.createElement("div", {
    className: "card card-squircle",
    style: {
      padding: 32,
      position: 'relative',
      height: '100%'
    }
  }, /*#__PURE__*/React.createElement("div", {
    style: {
      font: '900 60px/0.5 var(--font-script)',
      color: tints.fg,
      opacity: .4,
      position: 'absolute',
      top: 28,
      left: 28
    }
  }, "\""), /*#__PURE__*/React.createElement("p", {
    className: "t-body",
    style: {
      marginTop: 20,
      fontSize: 15,
      lineHeight: 1.6,
      color: 'var(--ink)'
    }
  }, quote), /*#__PURE__*/React.createElement("div", {
    style: {
      marginTop: 24,
      display: 'flex',
      alignItems: 'center',
      gap: 14,
      paddingTop: 20,
      borderTop: '1px solid var(--line)'
    }
  }, /*#__PURE__*/React.createElement("div", {
    style: {
      width: 44,
      height: 44,
      borderRadius: '50%',
      background: tints.bg,
      color: tints.fg,
      display: 'grid',
      placeItems: 'center',
      font: '700 15px/1 var(--font-sans)',
      flexShrink: 0
    }
  }, initials), /*#__PURE__*/React.createElement("div", null, /*#__PURE__*/React.createElement("div", {
    style: {
      font: '700 15px/1.2 var(--font-sans)',
      color: 'var(--ink)'
    }
  }, name), /*#__PURE__*/React.createElement("div", {
    className: "t-xs"
  }, role, " \xB7 ", where))));
}

// ============== WHO IT'S FOR ==============
function WhoItsFor() {
  const groups = ['Doctors', 'Healers', 'Surgeons', 'Super Specialists', 'Physicians', 'Hospital Owners', 'Clinic Owners', 'Nursing Home Owners', 'Medical Directors', 'Hospital Administrators', 'Healthcare Startup Founders', 'Hospital Marketing Teams', 'Consultants', 'Health Experts', 'Life Coaches', 'Working Professionals', 'Doctors Leaving Corporate', 'Healthcare Managers'];
  return /*#__PURE__*/React.createElement("section", {
    style: {
      padding: 'var(--s-10) 0'
    }
  }, /*#__PURE__*/React.createElement("div", {
    className: "container-x"
  }, /*#__PURE__*/React.createElement("div", {
    className: "grid lg:grid-cols-5 gap-10 items-start"
  }, /*#__PURE__*/React.createElement("div", {
    className: "lg:col-span-2"
  }, /*#__PURE__*/React.createElement("div", {
    className: "t-eyebrow"
  }, "Is This For You?"), /*#__PURE__*/React.createElement("h2", {
    className: "t-h1 t-gradient",
    style: {
      marginTop: 16
    }
  }, "Who this community is built for."), /*#__PURE__*/React.createElement("p", {
    className: "t-lead",
    style: {
      marginTop: 20
    }
  }, "If you're committed to healing people first \u2014 and you believe growth shouldn't require manipulation \u2014 this is home.")), /*#__PURE__*/React.createElement("div", {
    className: "lg:col-span-3"
  }, /*#__PURE__*/React.createElement("div", {
    className: "flex flex-wrap gap-2"
  }, groups.map((g, i) => /*#__PURE__*/React.createElement("span", {
    key: g,
    className: "pill",
    style: {
      background: i % 4 === 0 ? 'var(--purple-100)' : i % 4 === 1 ? 'var(--gold-100)' : i % 4 === 2 ? '#fff' : 'var(--coral-200)',
      color: i % 4 === 0 ? 'var(--purple-700)' : i % 4 === 1 ? 'var(--gold-600)' : i % 4 === 2 ? 'var(--ink)' : '#9C3B20',
      border: i % 4 === 2 ? '1px solid var(--line)' : 'none',
      fontSize: 14,
      padding: '10px 16px'
    }
  }, g)))))));
}

// ============== HOW IT WORKS ==============
function HowItWorks() {
  const steps = [['01', 'Sign up for free', 'Create your account and join the community instantly.'], ['02', 'Start learning', 'Access courses, frameworks, and growth systems.'], ['03', 'Upgrade to Silver', '₹4,999 once. Unlock the full ethical growth curriculum.'], ['04', 'Grow ethically', 'Implement proven systems with weekly support.'], ['05', 'Scale with integrity', 'Reach ₹1 Crore+ revenue — staying true to your values.']];
  return /*#__PURE__*/React.createElement("section", {
    style: {
      padding: 'var(--s-10) 0',
      background: 'var(--canvas-warm)'
    }
  }, /*#__PURE__*/React.createElement("div", {
    className: "container-x"
  }, /*#__PURE__*/React.createElement("div", {
    className: "text-center"
  }, /*#__PURE__*/React.createElement("div", {
    className: "t-eyebrow"
  }, "How It Works"), /*#__PURE__*/React.createElement("h2", {
    className: "t-display t-gradient",
    style: {
      maxWidth: '14ch',
      margin: '16px auto 0'
    }
  }, "Get started in 5 simple steps.")), /*#__PURE__*/React.createElement("div", {
    className: "grid md:grid-cols-5 gap-4 mt-14"
  }, steps.map(([n, t, d], i) => /*#__PURE__*/React.createElement("div", {
    key: n,
    className: "card",
    style: {
      padding: 24,
      position: 'relative'
    }
  }, /*#__PURE__*/React.createElement("div", {
    style: {
      font: '900 48px/1 var(--font-sans)',
      letterSpacing: '-.04em',
      background: 'var(--grad-headline)',
      WebkitBackgroundClip: 'text',
      color: 'transparent'
    }
  }, n), /*#__PURE__*/React.createElement("div", {
    className: "t-h3",
    style: {
      marginTop: 16,
      fontSize: 17
    }
  }, t), /*#__PURE__*/React.createElement("div", {
    className: "t-sm",
    style: {
      marginTop: 8,
      fontSize: 13
    }
  }, d))))));
}
Object.assign(window, {
  Founder,
  Testimonials,
  WhoItsFor,
  HowItWorks
});
})(); } catch (e) { __ds_ns.__errors.push({ path: "ui_kits/marketing_site/Sections2.jsx", error: String((e && e.message) || e) }); }

// ui_kits/marketing_site/Sections3.jsx
try { (() => {
function _extends() { return _extends = Object.assign ? Object.assign.bind() : function (n) { for (var e = 1; e < arguments.length; e++) { var t = arguments[e]; for (var r in t) ({}).hasOwnProperty.call(t, r) && (n[r] = t[r]); } return n; }, _extends.apply(null, arguments); }
/* global React */
const {
  useState
} = React;

// ============== PRICING ==============
function Pricing() {
  const tiers = [{
    name: 'Silver',
    badge: 'RECOMMENDED · START HERE',
    sub: 'Everything you need to start growing ethically.',
    price: '₹4,999',
    terms: 'One-time · Lifetime Access',
    cta: 'Join Silver Today',
    featured: true,
    // <-- Silver is positioned as the hero per user ask
    bullets: ['3-Day Growth Starter Course', '11 Step-by-Step Growth Courses', 'Ethical Patient Acquisition System', 'Content & Authority Building', 'Lead Generation Basics', 'Monthly Growth Hackathon Access', 'Weekly Inner Circle Calls', 'Community of Healthcare Leaders', 'Ethical Certification Badge']
  }, {
    name: 'Gold',
    badge: 'MOST POPULAR',
    sub: 'Advanced systems for serious growth.',
    price: '₹19,999',
    terms: 'One-time · Lifetime Access',
    cta: 'Get Gold',
    bullets: ['Everything in Silver', '₹3 Lakh → ₹1 Crore Growth Path', 'Advanced Patient Acquisition', 'Meta Ads + Paid Growth Strategy', 'SEO + YouTube Authority', 'Patient Conversion Frameworks', 'AI-Based Content + Marketing', 'High-Quality Patient Funnels', 'Structured Execution Tracking']
  }, {
    name: 'Diamond',
    sub: 'Complete system for maximum scale.',
    price: '₹49,999',
    terms: 'Yearly',
    cta: 'Go Diamond',
    bullets: ['Everything in Gold', 'AI-Powered Growth Automation', 'Weekly Leadership Council', 'Implementation Tracking System', 'Advanced Scaling Strategy', 'Personal Brand Domination', 'MDpedia Directory Profile', 'Access to 20 Paid AI Tools · 1 Year']
  }];
  return /*#__PURE__*/React.createElement("section", {
    id: "pricing",
    style: {
      padding: 'var(--s-10) 0'
    }
  }, /*#__PURE__*/React.createElement("div", {
    className: "container-x"
  }, /*#__PURE__*/React.createElement("div", {
    className: "text-center"
  }, /*#__PURE__*/React.createElement("div", {
    className: "t-eyebrow"
  }, "Choose Your Path"), /*#__PURE__*/React.createElement("h2", {
    className: "t-display t-gradient",
    style: {
      maxWidth: '16ch',
      margin: '16px auto 0'
    }
  }, "Invest in your ethical growth."), /*#__PURE__*/React.createElement("p", {
    className: "t-lead",
    style: {
      maxWidth: '50ch',
      margin: '20px auto 0'
    }
  }, "One-time investment. Lifetime transformation. No recurring charges for Silver & Gold.")), /*#__PURE__*/React.createElement("div", {
    className: "grid lg:grid-cols-3 gap-6 mt-14 items-start"
  }, tiers.map(t => /*#__PURE__*/React.createElement(PricingCard, _extends({
    key: t.name
  }, t)))), /*#__PURE__*/React.createElement("div", {
    className: "flex flex-wrap justify-center gap-6 mt-10"
  }, /*#__PURE__*/React.createElement("span", {
    className: "t-sm",
    style: {
      color: 'var(--ink)'
    }
  }, "\uD83D\uDD12 Secure payment"), /*#__PURE__*/React.createElement("span", {
    style: {
      color: 'var(--line)'
    }
  }, "\xB7"), /*#__PURE__*/React.createElement("span", {
    className: "t-sm",
    style: {
      color: 'var(--ink)'
    }
  }, "\uD83D\uDCAF Lifetime access (Silver & Gold)"), /*#__PURE__*/React.createElement("span", {
    style: {
      color: 'var(--line)'
    }
  }, "\xB7"), /*#__PURE__*/React.createElement("span", {
    className: "t-sm",
    style: {
      color: 'var(--ink)'
    }
  }, "\uD83D\uDCDE Support included"), /*#__PURE__*/React.createElement("span", {
    style: {
      color: 'var(--line)'
    }
  }, "\xB7"), /*#__PURE__*/React.createElement("span", {
    className: "t-sm",
    style: {
      color: 'var(--ink)'
    }
  }, "7-day refund"))));
}
function PricingCard({
  name,
  badge,
  sub,
  price,
  terms,
  cta,
  bullets,
  featured
}) {
  const isFeatured = !!featured;
  return /*#__PURE__*/React.createElement("div", {
    style: {
      background: '#fff',
      borderRadius: 'var(--r-xl)',
      padding: isFeatured ? 40 : 32,
      border: isFeatured ? '2px solid transparent' : '1px solid var(--line)',
      backgroundImage: isFeatured ? 'linear-gradient(#fff,#fff), var(--grad-gold)' : undefined,
      backgroundOrigin: isFeatured ? 'border-box' : undefined,
      backgroundClip: isFeatured ? 'padding-box, border-box' : undefined,
      boxShadow: isFeatured ? 'var(--shadow-glow-purple)' : 'var(--shadow-sm)',
      transform: isFeatured ? 'translateY(-12px)' : 'none',
      position: 'relative'
    }
  }, badge && /*#__PURE__*/React.createElement("div", {
    style: {
      position: 'absolute',
      top: -14,
      left: '50%',
      transform: 'translateX(-50%)',
      background: isFeatured ? 'var(--grad-gold)' : 'var(--ink)',
      color: isFeatured ? 'var(--ink)' : 'white',
      padding: '8px 16px',
      borderRadius: 999,
      font: '700 11px/1 var(--font-sans)',
      letterSpacing: '.1em',
      textTransform: 'uppercase',
      whiteSpace: 'nowrap',
      boxShadow: isFeatured ? 'var(--shadow-glow-gold)' : 'var(--shadow-sm)'
    }
  }, badge), /*#__PURE__*/React.createElement("div", {
    style: {
      font: '700 22px/1 var(--font-sans)',
      color: 'var(--ink)',
      letterSpacing: '-.01em'
    }
  }, name), /*#__PURE__*/React.createElement("div", {
    className: "t-sm",
    style: {
      marginTop: 8
    }
  }, sub), /*#__PURE__*/React.createElement("div", {
    style: {
      marginTop: 24
    }
  }, /*#__PURE__*/React.createElement("div", {
    style: {
      font: '900 clamp(48px, 6vw, 64px)/1 var(--font-sans)',
      letterSpacing: '-.04em',
      background: 'var(--grad-headline)',
      WebkitBackgroundClip: 'text',
      color: 'transparent'
    }
  }, price), /*#__PURE__*/React.createElement("div", {
    className: "t-sm",
    style: {
      marginTop: 6,
      color: 'var(--ink-muted)'
    }
  }, terms)), /*#__PURE__*/React.createElement("a", {
    href: "#register",
    className: isFeatured ? 'btn btn-primary btn-lg' : 'btn btn-ghost btn-lg',
    style: {
      width: '100%',
      marginTop: 24
    }
  }, cta), /*#__PURE__*/React.createElement("ul", {
    style: {
      listStyle: 'none',
      padding: 0,
      margin: '28px 0 0',
      display: 'flex',
      flexDirection: 'column',
      gap: 12
    }
  }, bullets.map(b => /*#__PURE__*/React.createElement("li", {
    key: b,
    style: {
      display: 'flex',
      gap: 10,
      alignItems: 'flex-start'
    }
  }, /*#__PURE__*/React.createElement("span", {
    style: {
      flexShrink: 0,
      width: 20,
      height: 20,
      borderRadius: '50%',
      background: 'var(--success)',
      display: 'grid',
      placeItems: 'center',
      marginTop: 2
    }
  }, /*#__PURE__*/React.createElement("svg", {
    viewBox: "0 0 24 24",
    fill: "none",
    stroke: "white",
    strokeWidth: "3",
    strokeLinecap: "round",
    strokeLinejoin: "round",
    width: "12",
    height: "12"
  }, /*#__PURE__*/React.createElement("polyline", {
    points: "5 12 10 17 20 7"
  }))), /*#__PURE__*/React.createElement("span", {
    className: "t-sm",
    style: {
      color: 'var(--ink-soft)',
      lineHeight: 1.5,
      fontSize: 14
    }
  }, b)))));
}

// ============== FAQ ==============
function FAQ() {
  const qs = [['What makes this different from regular healthcare marketing?', 'Most marketing for doctors is built for any business. This is built specifically for healers — it starts with trust, not tactics. You won\'t find scripts that make you sound like a salesperson. You\'ll find systems that make your existing expertise visible.'], ['I\'m not tech-savvy. Will I be able to use the tools?', 'Yes. Every framework is broken into step-by-step execution. The AI tools we teach are the kind doctors across India are already using with no technical background.'], ['How quickly will I see results?', 'Most members see clarity and momentum inside the first 30 days. The full 90-day Revenue Architecture™ is designed for ₹3L → ₹1Cr progression, but that depends on your starting point and how fully you implement.'], ['Is this only for private practices?', 'No. We have clinic owners, hospital owners, surgeons, healers, nursing-home owners, healthcare startup founders, and marketing teams inside.'], ['What\'s included in the free membership?', 'Access to the community space, introductory content, and invites to monthly open sessions. It\'s a genuine first step — not a disguised sales funnel.'], ['Can I cancel or get a refund?', 'Silver & Gold are one-time lifetime. We offer a 7-day full refund if the community isn\'t the right fit. Diamond is yearly with pro-rata refund per our refund policy.']];
  const [open, setOpen] = useState(0);
  return /*#__PURE__*/React.createElement("section", {
    id: "faq",
    style: {
      padding: 'var(--s-10) 0',
      background: 'var(--canvas-warm)'
    }
  }, /*#__PURE__*/React.createElement("div", {
    className: "container-x",
    style: {
      maxWidth: 860
    }
  }, /*#__PURE__*/React.createElement("div", {
    className: "text-center"
  }, /*#__PURE__*/React.createElement("div", {
    className: "t-eyebrow"
  }, "Questions?"), /*#__PURE__*/React.createElement("h2", {
    className: "t-display t-gradient",
    style: {
      maxWidth: '16ch',
      margin: '16px auto 0'
    }
  }, "Frequently asked questions.")), /*#__PURE__*/React.createElement("div", {
    style: {
      marginTop: 48,
      display: 'flex',
      flexDirection: 'column',
      gap: 12
    }
  }, qs.map(([q, a], i) => /*#__PURE__*/React.createElement("div", {
    key: i,
    className: "card",
    style: {
      padding: 0,
      overflow: 'hidden'
    }
  }, /*#__PURE__*/React.createElement("button", {
    onClick: () => setOpen(open === i ? -1 : i),
    style: {
      width: '100%',
      textAlign: 'left',
      padding: '22px 28px',
      display: 'flex',
      alignItems: 'center',
      justifyContent: 'space-between',
      gap: 16,
      background: 'transparent',
      border: 'none',
      cursor: 'pointer',
      font: '700 17px/1.3 var(--font-sans)',
      color: 'var(--ink)'
    }
  }, /*#__PURE__*/React.createElement("span", null, q), /*#__PURE__*/React.createElement("span", {
    style: {
      flexShrink: 0,
      width: 32,
      height: 32,
      borderRadius: '50%',
      background: 'var(--purple-100)',
      color: 'var(--purple-600)',
      display: 'grid',
      placeItems: 'center',
      transition: 'transform 240ms var(--ease)',
      transform: open === i ? 'rotate(45deg)' : 'rotate(0)'
    }
  }, /*#__PURE__*/React.createElement("svg", {
    viewBox: "0 0 24 24",
    fill: "none",
    stroke: "currentColor",
    strokeWidth: "2.2",
    strokeLinecap: "round",
    width: "16",
    height: "16"
  }, /*#__PURE__*/React.createElement("path", {
    d: "M12 5v14M5 12h14"
  })))), open === i && /*#__PURE__*/React.createElement("div", {
    style: {
      padding: '0 28px 24px',
      color: 'var(--ink-soft)',
      font: '400 15px/1.65 var(--font-sans)'
    }
  }, a))))));
}

// ============== FINAL CTA ==============
function FinalCTA({
  deadline
}) {
  return /*#__PURE__*/React.createElement("section", {
    id: "register",
    style: {
      padding: 'var(--s-10) 0 var(--s-9)'
    }
  }, /*#__PURE__*/React.createElement("div", {
    className: "container-x"
  }, /*#__PURE__*/React.createElement("div", {
    className: "card-hero",
    style: {
      background: 'linear-gradient(135deg, #1a1147 0%, #2A1E6B 55%, #7C3AED 100%)',
      color: 'white',
      borderRadius: 'var(--r-2xl)',
      padding: 'clamp(40px, 6vw, 72px)',
      position: 'relative',
      overflow: 'hidden',
      boxShadow: 'var(--shadow-lg)'
    }
  }, /*#__PURE__*/React.createElement("div", {
    style: {
      position: 'absolute',
      top: -80,
      right: -80,
      width: 360,
      height: 360,
      borderRadius: '50%',
      background: 'radial-gradient(circle, rgba(251,191,36,.4) 0%, transparent 70%)',
      filter: 'blur(20px)'
    }
  }), /*#__PURE__*/React.createElement("div", {
    style: {
      position: 'absolute',
      bottom: -100,
      left: -60,
      width: 300,
      height: 300,
      borderRadius: '50%',
      background: 'radial-gradient(circle, rgba(139,92,246,.5) 0%, transparent 70%)',
      filter: 'blur(20px)'
    }
  }), /*#__PURE__*/React.createElement("div", {
    style: {
      position: 'relative',
      textAlign: 'center'
    }
  }, /*#__PURE__*/React.createElement("div", {
    className: "t-eyebrow",
    style: {
      color: 'rgba(255,255,255,.7)'
    }
  }, "Limited Time Offer"), /*#__PURE__*/React.createElement("h2", {
    style: {
      font: '900 clamp(36px, 5.5vw, 72px)/1 var(--font-sans)',
      letterSpacing: '-.035em',
      marginTop: 16,
      maxWidth: '18ch',
      marginLeft: 'auto',
      marginRight: 'auto',
      color: 'white'
    }
  }, "Join the #1 ethical healthcare community."), /*#__PURE__*/React.createElement("p", {
    style: {
      font: '500 clamp(16px, 1.6vw, 20px)/1.5 var(--font-sans)',
      color: 'rgba(255,255,255,.8)',
      marginTop: 20,
      maxWidth: '56ch',
      marginLeft: 'auto',
      marginRight: 'auto'
    }
  }, "Build a profitable practice with integrity. Start your journey to \u20B91 Crore+ revenue \u2014 without compromising who you are."), /*#__PURE__*/React.createElement("div", {
    style: {
      marginTop: 40
    }
  }, /*#__PURE__*/React.createElement(Countdown, {
    deadline: deadline,
    label: "Limited Time Offer",
    dark: true
  })), /*#__PURE__*/React.createElement("div", {
    className: "flex flex-col sm:flex-row gap-3 justify-center mt-10"
  }, /*#__PURE__*/React.createElement("a", {
    href: "#pricing",
    className: "btn btn-gold btn-lg"
  }, "Become a Free Member"), /*#__PURE__*/React.createElement("a", {
    href: "#pricing",
    className: "btn btn-lg",
    style: {
      background: 'rgba(255,255,255,.1)',
      color: 'white',
      border: '1px solid rgba(255,255,255,.3)'
    }
  }, "See Silver Membership")), /*#__PURE__*/React.createElement("div", {
    className: "flex flex-wrap gap-5 justify-center mt-6"
  }, /*#__PURE__*/React.createElement("span", {
    className: "t-sm",
    style: {
      color: 'rgba(255,255,255,.75)'
    }
  }, "\uD83D\uDD12 No credit card required"), /*#__PURE__*/React.createElement("span", {
    className: "t-sm",
    style: {
      color: 'rgba(255,255,255,.75)'
    }
  }, "\xB7"), /*#__PURE__*/React.createElement("span", {
    className: "t-sm",
    style: {
      color: 'rgba(255,255,255,.75)'
    }
  }, "Join 500+ ethical doctors"))))));
}

// ============== FOOTER ==============
function Footer() {
  return /*#__PURE__*/React.createElement("footer", {
    style: {
      padding: 'var(--s-8) 0 var(--s-7)',
      borderTop: '1px solid var(--line)'
    }
  }, /*#__PURE__*/React.createElement("div", {
    className: "container-x"
  }, /*#__PURE__*/React.createElement("div", {
    className: "flex flex-wrap items-center justify-between gap-6"
  }, /*#__PURE__*/React.createElement("div", {
    className: "flex items-center gap-3"
  }, /*#__PURE__*/React.createElement("img", {
    src: "../../assets/logo-mark.svg",
    className: "w-9 h-9",
    alt: ""
  }), /*#__PURE__*/React.createElement("div", null, /*#__PURE__*/React.createElement("div", {
    style: {
      font: '700 14px/1 var(--font-sans)',
      color: 'var(--ink)'
    }
  }, "Ethical Healthcare Community"), /*#__PURE__*/React.createElement("div", {
    className: "t-xs",
    style: {
      marginTop: 4
    }
  }, "by Branding Pioneers \xB7 Founded by Nishu Sharma"))), /*#__PURE__*/React.createElement("div", {
    className: "flex flex-wrap gap-5"
  }, /*#__PURE__*/React.createElement("a", {
    href: "#",
    className: "t-sm"
  }, "Memberships"), /*#__PURE__*/React.createElement("a", {
    href: "#",
    className: "t-sm"
  }, "Privacy Policy"), /*#__PURE__*/React.createElement("a", {
    href: "#",
    className: "t-sm"
  }, "Refund Policy"), /*#__PURE__*/React.createElement("a", {
    href: "#",
    className: "t-sm"
  }, "Terms"))), /*#__PURE__*/React.createElement("div", {
    className: "t-xs",
    style: {
      marginTop: 28,
      textAlign: 'center'
    }
  }, "\xA9 2026 Branding Pioneers. All Rights Reserved.")));
}

// ============== STICKY MOBILE CTA ==============
function StickyMobileCTA() {
  return /*#__PURE__*/React.createElement("div", {
    style: {
      position: 'fixed',
      bottom: 0,
      left: 0,
      right: 0,
      zIndex: 30,
      padding: '12px 16px 16px',
      background: 'rgba(255,255,255,.92)',
      backdropFilter: 'blur(18px)',
      borderTop: '1px solid var(--line)',
      display: 'flex',
      alignItems: 'center',
      gap: 12
    },
    className: "md:hidden"
  }, /*#__PURE__*/React.createElement("div", {
    style: {
      flex: 1
    }
  }, /*#__PURE__*/React.createElement("div", {
    style: {
      font: '700 14px/1.2 var(--font-sans)',
      color: 'var(--ink)'
    }
  }, "\u20B951 Ethical Growth Webinar"), /*#__PURE__*/React.createElement("div", {
    className: "t-xs",
    style: {
      marginTop: 2
    }
  }, "Live \xB7 500+ doctors attending")), /*#__PURE__*/React.createElement("a", {
    href: "#pricing",
    className: "btn btn-primary btn-sm"
  }, "Join Free \u2192"));
}
Object.assign(window, {
  Pricing,
  FAQ,
  FinalCTA,
  Footer,
  StickyMobileCTA
});
})(); } catch (e) { __ds_ns.__errors.push({ path: "ui_kits/marketing_site/Sections3.jsx", error: String((e && e.message) || e) }); }

})();
