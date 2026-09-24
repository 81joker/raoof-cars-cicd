function Hero({ onBook, onFleet }) {
  return (
    <section style={{
      position: 'relative',
      minHeight: 620,
      display: 'flex',
      alignItems: 'center',
      justifyContent: 'center',
      paddingBlock: 80,
      overflow: 'hidden',
    }}>

      {/* 🎥 Background video */}
      <video
        autoPlay
        muted
        loop
        playsInline
        style={{
          position: 'absolute',
          inset: 0,
          width: '100%',
          height: '100%',
          objectFit: 'cover',
          zIndex: 0,
        }}
      >
        <source src="/assets/video-car.mp4" type="video/mp4" />
      </video>

      {/* 🌑 Gradient overlay (same as your original) */}
      <div style={{
        position: 'absolute',
        inset: 0,
        background: `linear-gradient(
          180deg,
          rgba(17,17,17,0.85) 0%,
          rgba(17,17,17,0.7) 45%,
          rgba(17,17,17,0.95) 100%
        )`,
        zIndex: 1,
      }} />

      {/* ✨ Your original content (unchanged) */}
      <div style={{
        position: 'relative',
        zIndex: 2,
        maxWidth: 1100,
        padding: '0 40px',
        textAlign: 'center',
        color: 'white',
      }}>
        <div style={{
          fontFamily: "'Tajawal'",
          fontSize: 14,
          fontWeight: 500,
          letterSpacing: '0.32em',
          color: '#D4A017',
          marginBottom: 24,
          textTransform: 'uppercase',
        }}>
          LUXURY · CHAUFFEUR · EUROPE
        </div>

        <h1 style={{
          fontFamily: "'Cairo', 'Tajawal', sans-serif",
          fontSize: 'clamp(36px, 5.5vw, 60px)',
          fontWeight: 700,
          lineHeight: 1.25,
          margin: 0,
          textWrap: 'balance',
        }}>
          شركة <span style={{
            fontFamily: "'Cormorant Garamond', serif",
            fontStyle: 'italic',
            color: '#D4A017',
            fontWeight: 700,
          }}>Raoof&nbsp;Cars</span> للأرشاد السياحي
          <br/>
          وتأجير السيارات مع سائق وبدون
          <br/>
          في جميع أنحاء أوروبا
        </h1>

        <p style={{
          fontFamily: "'Tajawal'",
          fontSize: 19,
          lineHeight: 1.75,
          color: 'rgba(255,255,255,0.78)',
          maxWidth: 720,
          margin: '32px auto 0',
        }}>
          خدمة استثنائية بمعايير الضيافة الخمس نجوم، بسيارات حديثة وسائقين محترفين يتحدثون العربية.
        </p>

        <div style={{
          display: 'flex',
          gap: 16,
          justifyContent: 'center',
          marginTop: 44,
          flexWrap: 'wrap'
        }}>
          <Button variant="primary" onClick={onBook} icon={<Icon name="calendar-days" size={18} />}>
            احجز الآن
          </Button>
          <Button variant="outline" onClick={onFleet} icon={<Icon name="car" size={18} />}>
            شاهد الأسطول
          </Button>
        </div>
      </div>

    </section>
  );
}