/* Footer */
function Footer() {
  const logoSrc = (window.RAOOF_THEME && window.RAOOF_THEME.logoGold) || "../../assets/logo-gold.svg";
  const colTitle = {
    fontFamily: "'Cairo', 'Tajawal', sans-serif",
    fontSize: 16, fontWeight: 700, color: '#D4A017',
    marginBottom: 20, letterSpacing: '0.04em',
  };
  const linkStyle = {
    fontFamily: "'Tajawal'", fontSize: 14, lineHeight: 2,
    color: 'rgba(255,255,255,0.7)', textDecoration: 'none',
    display: 'block', transition: 'color 220ms',
  };
  return (
    <footer style={{ background: '#0B0B0B', color: '#F5F0E8', paddingBlock: 72, borderTop: '1px solid rgba(212,160,23,0.15)' }}>
      <div style={{ maxWidth: 1200, margin: '0 auto', padding: '0 40px' }}>
        <div style={{ display: 'grid', gridTemplateColumns: '1.4fr 1fr 1fr 1fr', gap: 48, marginBottom: 56 }}>
          <div>
            <img src={logoSrc} alt="Raoof Cars" style={{ height: 64, marginBottom: 20 }} />
            <p style={{
              fontFamily: "'Tajawal'", fontSize: 14, lineHeight: 1.85,
              color: 'rgba(255,255,255,0.7)', maxWidth: 320, margin: 0,
            }}>
              شركة Raoof Cars — خدمات تأجير السيارات الفاخرة والإرشاد السياحي في جميع أنحاء أوروبا.
            </p>
            <div style={{ display: 'flex', gap: 14, marginTop: 24 }}>
              {[WhatsAppGlyph, InstagramGlyph, SnapchatGlyph, TikTokGlyph].map((G, i) => (
                <a key={i} href="#" style={{ color: '#D4A017' }}><G size={18} /></a>
              ))}
            </div>
          </div>

          <div>
            <div style={colTitle}>روابط سريعة</div>
            <a href="#" style={linkStyle}>الرئيسية</a>
            <a href="#" style={linkStyle}>اسطول السيارات</a>
            <a href="#" style={linkStyle}>خدماتنا</a>
            <a href="#" style={linkStyle}>من نحن</a>
            <a href="#" style={linkStyle}>تواصل معنا</a>
          </div>

          <div>
            <div style={colTitle}>خدماتنا</div>
            <a href="#" style={linkStyle}>تأجير مع سائق</a>
            <a href="#" style={linkStyle}>تأجير بدون سائق</a>
            <a href="#" style={linkStyle}>استقبال المطار</a>
            <a href="#" style={linkStyle}>رحلات بين المدن</a>
            <a href="#" style={linkStyle}>باقات سياحية</a>
          </div>

          <div>
            <div style={colTitle}>تواصل</div>
            <div style={{ display: 'flex', alignItems: 'flex-start', gap: 10, marginBottom: 14, color: 'rgba(255,255,255,0.7)' }}>
              <span style={{ color: '#D4A017', marginTop: 2 }}><Icon name="map-pin" size={16} /></span>
              <span style={{ fontFamily: "'Tajawal'", fontSize: 14, lineHeight: 1.7 }}>Pernerstorferstraße 22<br/>3100 St. Pölten, Austria</span>
            </div>
            <div style={{ display: 'flex', alignItems: 'center', gap: 10, marginBottom: 12, color: 'rgba(255,255,255,0.7)' }}>
              <span style={{ color: '#D4A017' }}><Icon name="phone" size={16} /></span>
              <a href="tel:+436608433874" dir="ltr" style={{ ...linkStyle, lineHeight: 1.5 }}>+43 660 843 3874</a>
            </div>
            <div style={{ display: 'flex', alignItems: 'center', gap: 10, color: 'rgba(255,255,255,0.7)' }}>
              <span style={{ color: '#D4A017' }}><Icon name="mail" size={16} /></span>
              <a href="mailto:info@raoofcars.com" style={{ ...linkStyle, lineHeight: 1.5 }}>info@raoofcars.com</a>
            </div>
          </div>
        </div>

        <div style={{
          borderTop: '1px solid rgba(212,160,23,0.15)',
          paddingTop: 28,
          display: 'flex', justifyContent: 'space-between', flexWrap: 'wrap', gap: 16,
          fontFamily: "'Tajawal'", fontSize: 13, color: 'rgba(255,255,255,0.45)',
        }}>
          <span>© 2026 Raoof Cars — جميع الحقوق محفوظة</span>
          <span dir="ltr">Pernerstorferstraße 22 · 3100 St. Pölten · Austria</span>
        </div>
      </div>
    </footer>
  );
}
window.Footer = Footer;
