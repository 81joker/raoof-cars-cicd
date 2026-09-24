/* Navbar — sticky black RTL */
const { useState: useStateNav } = React;

function Navbar({ current, onNavigate }) {
  const logoSrc = (window.RAOOF_THEME && window.RAOOF_THEME.logoGold) || "../../assets/logo-gold.svg";
  const [scrolled, setScrolled] = useStateNav(false);
  React.useEffect(() => {
    const onScroll = () => setScrolled(window.scrollY > 80);
    window.addEventListener('scroll', onScroll);
    return () => window.removeEventListener('scroll', onScroll);
  }, []);
  const links = [
    { id: 'home', label: 'الرئيسية' },
    { id: 'fleet', label: 'اسطول السيارات' },
    { id: 'services', label: 'خدماتنا' },
    { id: 'about', label: 'من نحن' },
    { id: 'contact', label: 'تواصل معنا' },
  ];
  return (
    <nav style={{
      position: 'sticky', top: 0, zIndex: 100,
      background: scrolled ? 'rgba(17,17,17,0.88)' : '#111111',
      backdropFilter: scrolled ? 'blur(12px)' : 'none',
      WebkitBackdropFilter: scrolled ? 'blur(12px)' : 'none',
      borderBottom: '1px solid rgba(212,160,23,0.18)',
      transition: 'background 220ms',
    }}>
      <div style={{
        maxWidth: 1440, margin: '0 auto',
        padding: '18px 40px',
        display: 'flex', alignItems: 'center', justifyContent: 'space-between',
        gap: 24, whiteSpace: 'nowrap',
      }}>
        {/* Social icons (RTL: leftmost visually) */}
        <div style={{ display: 'flex', gap: 18, alignItems: 'center' }}>
          {[WhatsAppGlyph, InstagramGlyph, SnapchatGlyph, TikTokGlyph].map((G, i) => (
            <a key={i} href="#" style={{ color: '#D4A017', display: 'inline-flex', transition: 'color 220ms' }}
               onMouseEnter={e => e.currentTarget.style.color = '#E5B82E'}
               onMouseLeave={e => e.currentTarget.style.color = '#D4A017'}>
              <G size={18} />
            </a>
          ))}
          <span style={{ width: 1, height: 22, background: 'rgba(212,160,23,0.3)', marginInline: 8 }} />
          <a href="tel:+436608433874" style={{
            color: '#F5F0E8', textDecoration: 'none', fontFamily: "'Tajawal'",
            fontSize: 14, fontWeight: 500, letterSpacing: '0.02em',
            display: 'inline-flex', alignItems: 'center', gap: 8,
          }}>
            <Icon name="phone" size={15} />
            +43 660 843 3874
          </a>
        </div>

        {/* Center links */}
        <div style={{ display: 'flex', gap: 24, alignItems: 'center', flexShrink: 0 }}>
          {links.map(l => (
            <a
              key={l.id}
              onClick={() => onNavigate(l.id)}
              style={{
                fontFamily: "'Tajawal'", fontSize: 14, fontWeight: 500,
                whiteSpace: 'nowrap',
                color: current === l.id ? '#D4A017' : '#F5F0E8',
                textDecoration: 'none', cursor: 'pointer',
                paddingBottom: 4,
                borderBottom: current === l.id ? '1px solid #D4A017' : '1px solid transparent',
                transition: 'color 220ms, border-color 220ms',
              }}
              onMouseEnter={e => { if (current !== l.id) e.currentTarget.style.color = '#D4A017'; }}
              onMouseLeave={e => { if (current !== l.id) e.currentTarget.style.color = '#F5F0E8'; }}
            >
              {l.label}
            </a>
          ))}
        </div>

        {/* Wordmark (RTL: rightmost visually) */}
        <div onClick={() => onNavigate('home')} style={{ cursor: 'pointer' }}>
          <img src={logoSrc} alt="Raoof Cars" style={{ height: 56 }} />
        </div>
      </div>
    </nav>
  );
}

window.Navbar = Navbar;
